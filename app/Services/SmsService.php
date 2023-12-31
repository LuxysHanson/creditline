<?php

namespace App\Services;

use App\Components\smsc\Client;
use App\Helpers\Common;
use Illuminate\Support\Str;

class SmsService
{

    public function sendSMSMessage($phone, $message)
    {
        $debug = env('APP_ENV') == 'local' && env('APP_DEBUG');
        return $debug ?: $this->send($phone, Str::transliterate($message));
    }

    protected function send($phone, $message)
    {
        $phone = Common::getPhone($phone);

        try {
            $result = (new Client())->send_sms($phone, $message);
            if ($result->isOk()) {
                // сообщение отправлено
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            $msgError = $e->getMessage();
            throw new \Exception("Не удалось отправить SMS: $msgError", $e->getCode());
        }
    }

}
