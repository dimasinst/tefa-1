<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "description", "image","Model","Wire","Outside","Free_height",'Solid_height','Spring_rate'];
    public function category()
{
    return $this->belongsTo(categories::class);
}
}

