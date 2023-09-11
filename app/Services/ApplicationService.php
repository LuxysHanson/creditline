<?php

namespace App\Services;

use App\Helpers\Common;
use App\Models\Application;
use App\Models\SendSms;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicationService
{

    protected $smsService;

    public function __construct()
    {
        $this->smsService = app(SmsService::class);
    }

    public function create(string $phone)
    {
        $application = new Application();
        $application->phone = $phone;
        $application->id_hash = md5(uniqid().mt_rand());
        if (!$application->save()) {
            return false;
        }

        return $application;
    }

    public function sendSms(Request $request, Application $application)
    {
        $sendSms = new SendSms();
        $sendSms->phone = $request->post('phone');
        $sendSms->application_id = $request->post('application_id');
        $sendSms->code = Common::randomNumber();
        if (!$sendSms->save()) {
            return false;
        }

        $message = "Код: " . $sendSms->code  . " online.creditline.kz";
        if ($this->smsService->send($sendSms->phone, $message)) {
            $application->query()->update(['step' => $request->post('step')]);
            return true;
        }

        return false;
    }

    public function checkCode(Request $request, Application $application)
    {
        $applicationId = $request->post('application_id');
        $sendSms = SendSms::query()
            ->where('application_id', intval($applicationId))
            ->where('state', 0)
            ->orderByDesc('created_at')
            ->first();

        if ($sendSms) {
            $nowTime = now('Asia/Almaty')->format('Y-m-d H:i:s');
            $sendTime = Carbon::make($sendSms->created_at)
                ->addSeconds(119)
                ->timezone('Asia/Almaty')->format('Y-m-d H:i:s');
            if ($sendSms->code == $request->post('code')
                && Carbon::make($sendTime)->getTimestamp() >= Carbon::make($nowTime)->getTimestamp()) {
                $sendSms->update(['state' => 1]);
                $application->query()->where('id', $applicationId)->update(['step' => $request->post('step')]);
                return true;
            }
        }

        return false;
    }

    public function formData(Request $request)
    {

        $application = Application::query()
            ->where('id', intval($request->post('application_id')))
            ->first();

        if (!$application)
            return false;

        if ($key = $request->post('key')) {
            $application->{$key} = $request->post('data') ?: [];
        }

        $application->step = $request->post('step');
        return $application->save();
    }

}
