<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';

    protected $fillable=['telephone','phone','status','user_id'];
    

    //alcanze con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //alcanze con el modelo Shipping_packages
    public function shipp_pack()
    {
        return $this->belongsTo(Shipping_package::class);
    }
}
