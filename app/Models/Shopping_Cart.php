<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Cart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';

    protected $fillable=['product_id, user_id, cupon_id, price, quantity'];

   
    public function cupon()
    {
        return $this->BelongsTo(Cupon::class);
    }
}
