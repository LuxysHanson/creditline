<?php

namespace App\Helpers;

use App\Enums\MonthEnum;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;

class Common
{

    /**
     * От количество поставить на разные падежи
     *
     * @param $value
     * @param array $words
     * @return mixed
     */
    public static function multiplier($value, $words = array())
    {
        if ($value % 10 == 1 && ($value<10 || $value>20)) {
            return $words[0];
        } else if ($value % 10 > 1 && $value % 10 < 5 && ($value<10 || $value>20)) {
            return $words[1];
        } else {
            return $words[2];
        }
    }

    /**
     * По ссылке Youtube получить ID
     *
     * @param string $link
     * @return string
     */
    public static function getYoutubeId(string $link): string
    {

        $parts = parse_url($link);

        if (!isset($parts['query']))
            return '';

        parse_str($parts['query'], $query);
        return $query['v'] ?? '';
    }

    public static function getImage(?string $path): string
    {
        return $path ? Storage::url($path) : '';
    }

    public static function getVideoPoster(?string $path): string
    {
        $webpImage = self::getWebpByImage($path);
        return $webpImage ? self::getImage($webpImage) : self::getImage($path);
    }

    public static function getWebpByImage(string $path): string
    {
        return (strpos($path,'svg') === false) ? str_replace('.' . pathinfo($path, PATHINFO_EXTENSION), '.webp', $path) : '';
    }

    public static function getDateToString(string $date): string
    {
        $date = Carbon::make($date);
        return $date->day .' '. MonthEnum::getInTheGenetiveCase($date->month) .', '. $date->year;
    }

    public static function getPhone(string $phone): string
    {
        return preg_replace("/[^,.0-9]/", '', $phone);
    }

    public static function getWebpFormat($model, string $attribute)
    {
        $webpImage = Common::getWebpByImage($model->$attribute ?? '');
        return self::getImage($webpImage) ?: '';
    }

    public static function getCostToString(int $cost): string
    {
        return strlen($cost) > 6 ? (intval(substr($cost, 0, -5))/10).' млн.' : (intval(substr($cost, 0, -2))/10) . 'тыс';
    }

    public static function randomNumber($length = 6) {
        $arr = array(
            '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );

        $res = '';
        for ($i = 0; $i < $length; $i++) {
            $res .= $arr[random_int(0, count($arr) - 1)] ?? 0;
        }

        return (int)$res;
    }

    public static function compareTimeWithCurrent($date)
    {
        $nowTime = now('Asia/Almaty')->format('Y-m-d H:i:s');
        $sendTime = Carbon::make($date)
            ->addSeconds(179)
            ->timezone('Asia/Almaty')->format('Y-m-d H:i:s');
        return Carbon::make($sendTime)->getTimestamp() >= Carbon::make($nowTime)->getTimestamp();
    }

    public static function generateLink($application, $step)
    {
        $link = route('form', 'hash='. $application->id_hash);
        if ($application->step > $step) {
            return $link . '&stepTo='. $step;
        }
        return $link;
    }

    public static function getTicketId($id)
    {
        return 'U'.str_pad($id, 9, 0, STR_PAD_LEFT);
    }

}
