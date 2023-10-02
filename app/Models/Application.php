<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    use HasFactory;

    const STATUS_NEW = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_NOT_CONFIRMED = 2;
    const STATUS_BLOCKED = -1;

    const FAMILY_STATUS_1 = 0;
    const FAMILY_STATUS_2 = 1;
    const FAMILY_STATUS_3 = 2;

    const DOCUMENT_TYPE_1 = 0;
    const DOCUMENT_TYPE_2 = 1;

    const ISSUED_BY_DOC_1 = 0;
    const ISSUED_BY_DOC_2 = 1;

    const CITIZIENSHIP_1 = 0;
    const CITIZIENSHIP_2 = 1;

    const REPAYMENT_TYPE_1 = 1;
    const REPAYMENT_TYPE_2 = 2;

    protected $fillable = [
        'phone',
        'loan',
        'car',
        'doc_images',
        'client',
        'address',
        'car_images_1',
        'car_images_2',
        'data',
        'status'
    ];

    protected $casts = [
        'loan' => 'array',
        'car' => 'array',
        'doc_images' => 'array',
        'client' => 'array',
        'address' => 'array',
        'car_images_1' => 'array',
        'car_images_2' => 'array',
        'data' => 'array',
    ];

    public function sendSms(): HasMany
    {
        return $this->hasMany(SendSms::class)->where('state', true)->orderByDesc('id');
    }

    public function getFamilyStatuses(): array
    {
        return [
            static::FAMILY_STATUS_1 => __('form.step6.f_status_1'),
            static::FAMILY_STATUS_2 => __('form.step6.f_status_2'),
            static::FAMILY_STATUS_3 => __('form.step6.f_status_3'),
        ];
    }

    public function getDocumentTypes(): array
    {
        return [
            static::DOCUMENT_TYPE_1 => __('form.step5.udl'),
            static::DOCUMENT_TYPE_2 => __('form.step5.passport'),
        ];
    }

    public function getIssuedByDocument(): array
    {
        return [
            static::ISSUED_BY_DOC_1 => __('form.step6.issued_doc_1'),
            static::ISSUED_BY_DOC_2 => __('form.step6.issued_doc_2'),
        ];
    }

    public function getCitizienships(): array
    {
        return [
            static::CITIZIENSHIP_1 => __('form.step6.citizienship_1'),
            static::CITIZIENSHIP_2 => __('form.step6.citizienship_2'),
        ];
    }

    public function getRepaymentTypes(): array
    {
        return [
            static::REPAYMENT_TYPE_1 => __('general.block3.repayment_type1'),
            static::REPAYMENT_TYPE_2 => __('general.block3.repayment_type2'),
        ];
    }

    public function getAddress(): string
    {
        return ($this->address['locality'] ?? '') .', '. ($this->address['street'] ?? '')
            .', '. ($this->address['number_home'] ?? '') .', '. ($this->address['apartment'] ?? '');
    }

    public function getAddress2(): string
    {
        $equal_address = $this->address['equal_address'] ?? 'false';
        if ($equal_address == 'true')
            return '';

        return ($this->address['locality2'] ?? '') .', '. ($this->address['street2'] ?? '')
            .', '. ($this->address['number_home2'] ?? '') .', '. ($this->address['apartment2'] ?? '');
    }

    public function buildSchedule(): array
    {

        $percent = 3.72;
        $month = intval(str_replace(' ', '', $this->loan['deadline'] ?? ''));
        $calc = intval(str_replace(' ', '', $this->loan['monthly_pay'] ?? ''));
        $dolg = $calc * $month;
        $dolg2 = $calc * $month;

        $data = [];
        for ($i = 0; $i <= $month; $i++) {
            $data['elements'][$i] = [
                'date' => Carbon::now('Asia/Almaty')->addMonths($i+1)->format('d.m.Y'),
                'monthly_pay' => $calc .' ₸',
                'percent' => round($percent/$month, 5) .'%',
                'summa' => $dolg .' ₸',
                'balance' => $dolg2 .' ₸'
            ];
            $dolg2 -= $calc;
        }

        $data['total'] = $dolg.' ₸';
        return $data;
    }

}
