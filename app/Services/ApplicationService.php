<?php

namespace App\Services;

use App\Events\ApplicationCreatedEvent;
use App\Events\ApplicationUpdatedEvent;
use App\Helpers\Common;
use App\Models\Application;
use App\Models\Blacklist;
use App\Models\SendSms;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class ApplicationService
{

    protected $smsService;

    public function __construct()
    {
        $this->smsService = app(SmsService::class);
    }

    public function create(Request $request, Agent $agent)
    {

        $phone = $request->post('phone');
        $blackList = Blacklist::query()->where('phone', $phone)->first();
        if ($blackList) return false;

        $oldApplication = Application::query()
            ->where('phone', $phone)
            ->where('status', Application::STATUS_NEW)
            ->orderByDesc('id')
            ->first();

        if ($oldApplication)
            return $oldApplication;

        $application = new Application();
        $application->phone = $phone;
        $application->id_hash = md5(uniqid().mt_rand());

        $position = Location::get($request->ip());
        $application->data = [
            'ip'        => $request->ip(),
            'device'    => $agent->device(),
            'platform'  => $agent->platform(),
            'platform_v' => $agent->version($agent->platform()),
            'browser'   => $agent->browser(),
            'browser_v' => $agent->version($agent->browser()),
            'languages' => $agent->languages(),
            'latitude' => $position->latitude ?? null,
            'longitude' => $position->longitude ?? null
        ];
        $application->step = 1;
        if (!$application->save()) {
            return false;
        }

        ApplicationCreatedEvent::dispatch($application);

        return $application;
    }

    public function sendSms(Request $request, Application $application)
    {

        $oldSms = SendSms::query()
            ->where('phone', $request->post('phone'))
            ->where('application_id', $request->post('application_id'))
            ->orderByDesc('id')
            ->first();

        if ($oldSms) {


            $compareTime = Common::compareTimeWithCurrent($oldSms->created_at);

            if ($compareTime)
                return true;
        }      // print_r($compareTime);

        $sendSms = new SendSms();
        $sendSms->phone = $request->input('phone');
        $sendSms->step = $request->input('step');
        $sendSms->application_id = $request->post('application_id');
        $sendSms->code = Common::randomNumber();
        if (!$sendSms->save()) {
            return false;
        }

        $message = "Код: " . $sendSms->code  . " online.creditline.kz";
        if ($this->smsService->sendSMSMessage($sendSms->phone, $message)) {
            $application->query()
                ->where('id', $request->input('application_id'))
                ->update(['step' => $request->input('step')]);
            return true;
        }

        return false;
    }

    public function checkCode(Request $request, Application $application)
    {
        $applicationId = $request->post('application_id');
        $sendSms = SendSms::query()
            ->where('application_id', (int) $applicationId)
            ->where('state', 0)
            ->orderByDesc('created_at')
            ->first();

        if ($sendSms) {
            //$compareTime = Common::compareTimeWithCurrent($sendSms->created_at);
            //if ($sendSms->code == $request->post('code') && $compareTime) {
            if ($sendSms->code == $request->post('code')) {
                $sendSms->update(['state' => 1]);
                $application = $application->find($applicationId);
                $application->update(['step' => $request->post('step')]);

                event(new ApplicationUpdatedEvent($application, $request->all()));
                return true;
            }
        }

        return false;
    }

    public function formData(Request $request): bool
    {
        $application = Application::find($request->input('application_id'));

        if (!$application) {
            return false;
        }

        if ($key = $request->post('key')) {
            $application->{$key} = $request->post('data') ?: [];
        }

        $application->step = $request->post('step');

        $application->save();

        ApplicationUpdatedEvent::dispatch($application, $request->all());

        return true;
    }

}
