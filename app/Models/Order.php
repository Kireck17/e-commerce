<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable=['total','user_id','payment_method_id'];
    

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //alcanze con el modelo Shipping_packages
    public function sipping_pack()
    {
        return $this->belongsTo(Shipping_package::class);
    }

    //alcanze con el modelo Order_shipping_package
    public function order_shipping_pack()
    {
        return $this->belongsTo(Order_shipping_package::class);
    }

    //alcanze con el modelo Orders
    public function orderDetails()
    {
        return $this->belongsTo(Order_detail::class);
    }
}
