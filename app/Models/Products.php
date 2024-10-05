<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model // Ubah 'Products' menjadi 'Product'
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name", 
        "description", 
        "image",
        "model", // Sesuaikan nama atribut sesuai konvensi (huruf kecil)
        "wire",
        "outside",
        "free_height",
        "solid_height",
        "spring_rate",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(categories::class); // Pastikan relasi ini sudah ada
    }

}
