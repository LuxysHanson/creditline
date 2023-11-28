<?php

namespace App\Http\Controllers;

use App\Helpers\Common;
use App\Models\Application;
use App\Models\Blacklist;
use App\Models\SendSms;
use App\Services\ApplicationService;
use App\Services\BitrixService;
use App\Services\SmsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    protected $smsService;
    /**
     * @var ApplicationService|(ApplicationService&\Illuminate\Contracts\Foundation\Application)|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected $applicationService;
    private BitrixService $bitrixService;

    public function __construct()
    {
        $this->bitrixService = new BitrixService();
        $this->smsService = app(SmsService::class);
        $this->applicationService = app(ApplicationService::class);
    }

    # Принять заявку
    public function reject(Request $request)
    {

        $application = Application::query()
            ->where('id_hash', $request->post('hash'))
            ->firstOrFail();

        if ($this->smsService->sendSMSMessage($application->phone, "Вам отказано в микрокредите")) {
            $application->update(['status' => Application::STATUS_NOT_CONFIRMED]);

            $this->bitrixService->request('crm.deal.update', [
                'id' => $application->bitrix_id,
                'fields' => [
                    'STAGE_ID' => 'C4:LOSE'
                ],
            ]);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'error'], 500);
    }

    # Отказать заявку
    public function accept(Request $request): JsonResponse
    {

        $application = Application::query()
            ->where('id_hash', $request->post('hash'))
            ->firstOrFail();

        $routeLink = route('form', 'hash=' . $application->id_hash);
        $url = filter_var($routeLink, FILTER_VALIDATE_URL);
        $message = "Вам одобрен микрокредит, перейдите $url по ссылке для подписания Договора. Время подписания с 09:00 - 18:00 текущего дня";
        if ($this->smsService->sendSMSMessage($application->phone, $message)) {
            $application->status = Application::STATUS_CONFIRMED;
            $application->step = (int) $request->input('step');
            $application->assessed = $request->post('assessed');
            if ($application->save()) {
                $sendSms = new SendSms();
                $sendSms->phone = $application->phone;
                $sendSms->step = $request->input('step');
                $sendSms->application_id = $application->id;
                $sendSms->code = Common::randomNumber();
                $sendSms->save();

                $message = "Код: " . $sendSms->code  . " online.creditline.kz";
                $this->smsService->sendSMSMessage($application->phone, $message);

                $this->bitrixService->request('crm.deal.update', [
                    'id' => $application->bitrix_id,
                    'fields' => [
                        'STAGE_ID' => 'C4:UC_Q7DL6M',
                        'UF_CRM_1700974523049' => $application->assessed
                    ],
                ]);

                return response()->json(['status' => 'success']);
            }
        }

        return response()->json(['status' => 'error'], 500);
    }

    # Заблокировать заявку
    public function block(Request $request, Blacklist $blacklist)
    {

        $application = Application::query()
            ->where('id', $request->route('id'))
            ->firstOrFail();

        $blacklist->application_id = $application->id;
        $blacklist->phone = $application->phone;
        $blacklist->data = [
            'status' => $application->status,
            'step' => $application->step,
        ];
        if ($blacklist->save())
            $application->update(['status' => Application::STATUS_BLOCKED]);

        return back()->with('message', 'Заявка успешно заблокирована!');
    }

    # Разблокировать заявку
    public function unblock(Request $request)
    {

        $application = Application::query()
            ->where('id', $request->route('id'))
            ->firstOrFail();

        $blacklist = Blacklist::query()
            ->where('phone', $application->phone)
            ->where('application_id', $application->id)
            ->first();

        $application->step = intval($blacklist->data['step'] ?? 1);
        $application->status = intval($blacklist->data['status'] ?? 0);
        if ($application->save())
            $blacklist->delete();

        return back()->with('message', 'Заявка успешно разблокирована!');
    }
}
