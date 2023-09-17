<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PdfTemplatesEnum extends Enum
{

    const TEMPLATE_1 = 'questionnaire';
    const TEMPLATE_2 = 'consent';
    const TEMPLATE_3 = 'agreement';
    const TEMPLATE_4 = 'information_form';
    const TEMPLATE_5 = 'repayment_schedule';
    const TEMPLATE_6 = 'pledge_ticket';
    const TEMPLATE_7 = 'notification';

    public static function labelsByStep9()
    {
        return [
            self::TEMPLATE_1 => __('form.step9.doc1_name'),
            self::TEMPLATE_2 => __('form.step9.doc2_name'),
            self::TEMPLATE_3 => __('form.step9.doc3_name'),
            self::TEMPLATE_4 => __('form.step9.doc4_name'),
        ];
    }

    public static function labelsByStep14()
    {
        return [
            self::TEMPLATE_5 => __('form.step14.doc5_name'),
            self::TEMPLATE_6 => __('form.step14.doc6_name'),
            self::TEMPLATE_7 => __('form.step14.doc7_name'),
        ];
    }

    public static function keyExists(string $key): bool
    {
        return in_array($key, array_keys(self::labelsByStep9()))
            || in_array($key, array_keys(self::labelsByStep14()));
    }

}
