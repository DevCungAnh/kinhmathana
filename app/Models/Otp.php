<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'phone_number', 'code', 'type', 'is_used', 'expires_at'
    ];

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
