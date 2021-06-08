<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    use HasFactory;
    protected $table = 'payment_methods';

    protected $fillable=['method','cuantity'];
    

    //alcanze con el modelo Order
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
