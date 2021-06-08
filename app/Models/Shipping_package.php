<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_package extends Model
{
    use HasFactory;
    protected $table = 'shipping_packages';

    protected $fillable=['tracking_number','shipping_date','delivery_date','price','user_id','phone_id','address_id'];
    

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //alcanze con el modelo Phones
    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    //alcanze con el modelo Direction
    public function address()
    {
        return $this->belongsTo(Direction::class);
    }

    //alcanze con el modelo Order_shipping_package
    public function order_shipp_pack()
    {
        return $this->belongsTo(Order_shipping_package::class);
    }

    //alcanze con el modelo Parcel_shipping_package
    public function parcel_shipping_packagel()
    {
        return $this->belongsTo(Parcel_shipping_package::class);
    }
}
