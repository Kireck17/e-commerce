<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Cart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';

    protected $fillable=['stock_id, user_id,  quantity'];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
