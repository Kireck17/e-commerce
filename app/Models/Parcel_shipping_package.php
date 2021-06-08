<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel_shipping_package extends Model
{
    use HasFactory;
    protected $table = 'parcel_shipping_package';

    protected $fillable=['parcel_id','shipping_package_id'];
    

    //alcanze con el modelo Parcels
    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }

    //alcanze con el modelo Shipping_packages
    public function shipping_packages()
    {
        return $this->belongsTo(Shipping_package::class);
    }
}
