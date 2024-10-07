<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reseller; // Tambahkan ini

class Reseller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'province',
        'city',
        'alamat',
        'kodepos',
        'phone'
       
    ];
}
