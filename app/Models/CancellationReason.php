<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CancellationReason extends Model
{
    /** @use HasFactory<\Database\Factories\CancellationReasonFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'reason',
        'type',
        'is_active'
    ];

    protected $dates = ['deleted_at'];
}
