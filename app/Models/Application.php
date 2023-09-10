<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    const STATUS_NEW = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_NOT_CONFIRMED = 2;

    const FAMILY_STATUS_1 = 0;
    const FAMILY_STATUS_2 = 1;
    const FAMILY_STATUS_3 = 2;

    const DOCUMENT_TYPE_1 = 0;
    const DOCUMENT_TYPE_2 = 1;

    const ISSUED_BY_DOC_1 = 0;
    const ISSUED_BY_DOC_2 = 1;

    const CITIZIENSHIP_1 = 0;
    const CITIZIENSHIP_2 = 1;

    protected $fillable = [
        'phone',
        'loan',
        'car',
        'doc_images',
        'client',
        'address',
        'car_images_1',
        'car_images_2',
        'photo_car',
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
        'photo_car' => 'array',
    ];

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

}
