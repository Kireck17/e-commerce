<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable=['name','description','quantity', 'trademark_id', 'subcategory_id', 'category_id','barcode'];
    

    //alcanze con el modelo Trademark
    public function mark()
    {
        return $this->belongsTo(Trademark::class);
    }

    //alcanze con el modelo Product_variation
    public function prod_vari()
    {
        return $this->belongsTo(Product_variation::class);
    }

}
