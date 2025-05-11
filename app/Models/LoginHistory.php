<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginHistory extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ip_address', 'user_agent', 'login_time'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
