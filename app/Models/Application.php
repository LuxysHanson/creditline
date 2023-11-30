<?php

namespace App\Models;

use Arr;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Str;

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
        'status',
        'step',
        'id_hash',
        'bitrix_id'
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
        return ($this->address['locality'] ?? '') . ', ' . ($this->address['street'] ?? '')
            . ', дом ' . ($this->address['number_home'] ?? '') . ', кв. ' . ($this->address['apartment'] ?? '');
    }

    public function getAddress2(): string
    {
        $equal_address = $this->address['equal_address'] ?? 'false';
        if ($equal_address == 'true')
            return 'Совпадает с юр. адресом';

        return ($this->address['locality2'] ?? '') . ', ' . ($this->address['street2'] ?? '')
            . ', ' . ($this->address['number_home2'] ?? '') . ', ' . ($this->address['apartment2'] ?? '');
    }

    public function buildSchedule(): array
    {
        $data = [];
        if ($this->loan['repayment_type']==1){
            $percent = 3.72;
            $month = $this->getDeadline();
            $calc = (int) str_replace(' ', '', $this->loan['monthly_pay'] ?? '');
            $summa = (int) str_replace(' ', '', $this->loan['summa'] ?? '');
            $dolg = $calc * $month;
            $dolg2 = $calc * $month;


            $data['total']=0;
            for ($i = 1; $i <= 1; $i++) {
                $nextdate=Carbon::now('Asia/Almaty')->addDays(30*$i)->format('d.m.Y');

                $data['elements'][$i] = [
                    'date' => $nextdate,
                    'monthly_pay' => $calc+$summa . ' ₸',
                    'percent' => $calc . ' ₸',
                    'summa' => $summa.' ₸',
                    'balance' => '0 ₸'
                ];
                $dolg2 -= $calc;

                $data['total']+=$calc;

            }

            $data['total'] = $data['total']+$summa . ' ₸';
            $data['calc'] = $calc . ' ₸';
            $data['summa'] = $summa . ' ₸';
        }
        else{
            $percent = 3.72;
            $month = $this->getDeadline();
            $summa = (int) str_replace(' ', '', $this->loan['summa'] ?? '');

            $calc = $this->calc_ann_with_drive($summa,$month,$percent);
            $dolg = $calc * $month;
            $dolg2 = $calc * $month;

            $percent_sum = $this->percent_ann_with_drive($calc,$summa,$percent);
            $part_od = $calc - $percent_sum;
            $OD = $summa- $part_od;
            $lastOD=0;
            $full_percent=0;
            $data['total']=0;
            $nextdate=Carbon::now('Asia/Almaty')->addDays(30)->format('d.m.Y');
            $data['elements'][1] = [
                'date' => $nextdate,
                'monthly_pay' => number_format(round($calc), 0, ',', ' '). ' ₸',
                'percent' => number_format(round($percent_sum), 0, ',', ' ') . ' ₸',
                'summa' => number_format(round($part_od), 0, ',', ' ').' ₸',
                'balance' => number_format(round($OD), 0, ',', ' ').' ₸'
            ];

            for ($i = 2; $i <= $month; $i++) {
                $nextdate=Carbon::now('Asia/Almaty')->addDays(30*$i)->format('d.m.Y');
                $percent_sum = $this->percent_ann_with_drive($calc, $OD, $percent);
                $part_od = $calc - $percent_sum;
                $OD = $OD - $part_od;
                $lastOD += $part_od;
                $full_percent+=$percent_sum;
                $data['elements'][$i] = [
                    'date' => $nextdate,
                    'monthly_pay' => number_format(round($calc), 0, ',', ' '). ' ₸',
                    'percent' => number_format(round($percent_sum), 0, ',', ' ') . ' ₸',
                    'summa' => number_format(round($part_od), 0, ',', ' ').' ₸',
                    'balance' => number_format(round($OD), 0, ',', ' ').' ₸'
                ];
                $dolg2 -= $calc;

                $data['total']+=$calc;

            }

            $data['total'] = number_format(round($full_percent+$summa), 0, ',', ' '). ' ₸';
            $data['calc'] = number_format(round($full_percent), 0, ',', ' ') . ' ₸';
            $data['summa'] = number_format(round($summa), 0, ',', ' ') . ' ₸';
        }

        return $data;
    }
    public function percent_ann_with_drive($pay_sum, $od_sum, $rate) {
        $percent = $od_sum * $rate / 100;
        return $percent;
    }
    //расчет ежемесячного платежа аннуитет
    public function calc_ann_with_drive($a,$b,$c) {
        $c /= 100;

        $t = $a * $c / ( 1 - pow( ( 1 + $c ), -$b ) ) ;


        return ($t);
    }

    public function car(string $key, bool $upper = false): string
    {
        if (!Arr::exists($this->car, $key)){
            return '';
        }

        if ($upper){
            return Str::upper($this->car[$key]);
        }

        return $this->car[$key];
    }

    public function getFullName()
    {
        return $this->client['patronymic'] . ' ' . $this->client['name'] . ' ' . $this->client['surname'];
    }

    public function getIin()
    {
        return str_replace('-', '', $this->loan['iin'] ?? '');
    }


    public function getDeadline(): int
    {
        $paymentType = $this->loan['repayment_type'] ?? 2;

        if ($paymentType === 1){
            return 1;
        }

        return (int) explode(' ', $this->loan['deadline'])[0];
    }

    public function getNumberDoc()
    {
        return 'U'.str_pad($this->id, 9, 0, STR_PAD_LEFT);
    }

    public function getMonthlyPay()
    {
        $payment = explode(' ', $this->loan['monthly_pay']);
        unset($payment[array_key_last($payment)]);
        return implode(' ', $payment);
    }

}
