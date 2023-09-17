<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class MonthEnum extends Enum
{

    const MONTH_1 = 1;
    const MONTH_2 = 2;
    const MONTH_3 = 3;
    const MONTH_4 = 4;
    const MONTH_5 = 5;
    const MONTH_6 = 6;
    const MONTH_7 = 7;
    const MONTH_8 = 8;
    const MONTH_9 = 9;
    const MONTH_10 = 10;
    const MONTH_11 = 11;
    const MONTH_12 = 12;

    public static function getInTheGenetiveCase(int $month, string $locale = 'ru'): string
    {

        $months = [
            self::MONTH_1 => trans('general.month_1', [], $locale),
            self::MONTH_2 => trans('general.month_2', [], $locale),
            self::MONTH_3 => trans('general.month_3', [], $locale),
            self::MONTH_4 => trans('general.month_4', [], $locale),
            self::MONTH_5 => trans('general.month_5', [], $locale),
            self::MONTH_6 => trans('general.month_6', [], $locale),
            self::MONTH_7 => trans('general.month_7', [], $locale),
            self::MONTH_8 => trans('general.month_8', [], $locale),
            self::MONTH_9 => trans('general.month_9', [], $locale),
            self::MONTH_10 => trans('general.month_10', [], $locale),
            self::MONTH_11 => trans('general.month_11', [], $locale),
            self::MONTH_12 => trans('general.month_12', [], $locale),
        ];

        return $months[$month] ?? '';
    }

}
