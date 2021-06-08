<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_product extends Model
{
    use HasFactory;
    protected $table = 'photo_product';

    protected $fillable=['photo_id','product_id'];
    

    //alcanze con el modelo Photos
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    //alcanze con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
