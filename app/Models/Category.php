<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable=['name'];
    

    //alcanze con el modelo Product
    public function product()
    {
        return $this->hasMany(Product::class);
    }

     //alcanze con el modelo Category_product
     public function cat_product()
     {
         return $this->hasMany(Category_product::class);
     }
}
