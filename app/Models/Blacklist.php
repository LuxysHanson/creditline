<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blacklist extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'data',
        'phone',
        'application_id',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
