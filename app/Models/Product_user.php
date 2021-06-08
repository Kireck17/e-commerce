<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_user extends Model
{
    use HasFactory;
    protected $table = 'product_user';

    protected $fillable=['product_id','user_id'];
    

    //alcanze con el modelo Products
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
