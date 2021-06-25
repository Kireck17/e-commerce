<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $table = 'cupon';

    protected $fillable=['namecupon, value, valid, description'];

   
    public function shopping_cart()
    {
        return $this->hasMany(ShoppingCart::class);
    }
}
