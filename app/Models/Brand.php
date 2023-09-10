<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Brand extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'name',
        'data'
    ];
}
