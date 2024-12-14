<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id'; // Tetap sama
    protected $keyType = 'string'; // Karena UUID adalah tipe string
    public $incrementing = false; // Matikan auto-increment

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

    // Relasi ke model Categories
    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    // Boot method untuk generate UUID saat data dibuat
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->id)) {
                $product->id = (string) Str::uuid(); // Generate UUID saat membuat data baru
            }
        });
    }
}
