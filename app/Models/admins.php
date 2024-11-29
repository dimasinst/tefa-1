<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admins extends Authenticatable
{
    protected $table = 'users'; 

    protected $fillable = [
        'nickname', 'password', 
    ];

    protected $hidden = [
        'password',
    ];
}
