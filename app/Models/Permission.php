<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permission');
    }
}
