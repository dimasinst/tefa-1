<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admins extends Authenticatable
{
    protected $table = 'users'; // Mengarahkan ke tabel admins

    protected $fillable = [
        'nickname', 'password', // Sesuaikan dengan kolom yang ada di tabel admins
    ];

    protected $hidden = [
        'password',
    ];
}
