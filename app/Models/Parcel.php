<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
    protected $table = 'parcels';

    protected $fillable=['name'];
    

    //alcanze con el modelo Shipping_packages
    public function shipping_pack()
    {
        return $this->hasMany(Shipping_package::class);
    }

    //alcanze con el modelo Parcel_shipping_package
    public function parcel_shipping_pack()
    {
        return $this->hasMany(Parcel_shipping_package::class);
    }
}
