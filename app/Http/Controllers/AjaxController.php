<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Services\ApplicationService;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    protected $appService;

    public function __construct()
    {
        $this->appService = app(ApplicationService::class);
    }

    # Форма отправки заявки
    public function createApplication(Request $request)
    {
        $application = $this->appService->create($request);
        if (!$application) {
            return response()->json(['status' => 'error'], 500);
        }

        return response()->json(['status' => 'success', 'application' => $application]);
    }

    # Обработка СМС
    public function sendSms(Request $request, Application $application)
    {
        $isOk = $this->appService->sendSms($request, $application);
        if (!$isOk) {
            return response()->json(['status' => 'error'], 500);
        }

        return response()->json(['status' => 'success']);
    }

    # Проверка смс-кода
    public function checkCode(Request $request, Application $application)
    {
        $isOk = $this->appService->checkCode($request, $application);
        if (!$isOk) {
            return response()->json(['status' => 'error'], 500);
        }

        return response()->json(['status' => 'success']);
    }

    # Отправка данных формы
    public function formData(Request $request)
    {
        $isOk = $this->appService->formData($request);
        if (!$isOk) {
            return response()->json(['status' => 'error'], 500);
        }

        return response()->json(['status' => 'success']);
    }

}
