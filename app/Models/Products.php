<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model 
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name",
        "description",
        "image",
        "model", 
        "wire",
        "outside",
        "free_height",
        "solid_height",
        "spring_rate",
        "Free_length",
        "Initial_Tension",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(categories::class); // Pastikan relasi ini sudah ada
    }
}
