<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_variation extends Model
{
    use HasFactory;
    protected $table = 'product_variation';

    protected $fillable=['variation_id','product_id'];
    
    //alcanze con el modelo Variation
    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }
    //alcanze con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
