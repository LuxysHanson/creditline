<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Locality extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'name',
        'code',
        'parent_id',
        'data'
    ];
}
