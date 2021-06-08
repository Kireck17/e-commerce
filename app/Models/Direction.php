<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    protected $table = 'addresses';

    protected $fillable=['street','colony','state','country','status','internal_number','external_number','zip_code','user_id'];
    

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //alcanze con el modelo Shipping_packages
    public function ship_pack()
    {
        return $this->belongsTo(Shipping_packages::class);
    }
}
