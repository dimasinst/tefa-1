<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model // Ubah 'categories' menjadi 'Category'
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ["name"];

    public function products()
    {
        return $this->hasMany(Products::class); // Ubah 'Products' menjadi 'Product'
    }
}
