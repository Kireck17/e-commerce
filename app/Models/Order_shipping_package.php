<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_shipping_package extends Model
{
    use HasFactory;
    protected $table = 'order_shipping_package';

    protected $fillable=['order_id','shipping_package_id'];
    

    //alcanze con el modelo Orders
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    //alcanze con el modelo Shipping_packages
    public function sipping_pack()
    {
        return $this->belongsTo(Shipping_package::class);
    }
}
