<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use TCG\Voyager\Traits\Translatable;

class Model extends BaseModel
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'name',
        'data',
        'brand_id'
    ];
}
