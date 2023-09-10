<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Question extends Model
{
    use HasFactory, Translatable;

    protected $translatable = [
        'name',
        'answer'
    ];

    protected $fillable = [
        'name',
        'answer',
        'sort'
    ];

}
