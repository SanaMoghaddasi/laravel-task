<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Auth;

class User extends Auth
{
    protected $fillable = [
        'password', 'first_name', 'last_name', 'username'
    ];
    public function orders()
    {
        return $this->hasOne(Order::class, 'user_id', 'id');

    }
}
