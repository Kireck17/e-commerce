<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';

    protected $fillable=['kid_id','provider_id','warehouse_id','quantity','price'];
    

    //alcanze con el modelo Kid
    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }

    //alcanze con el modelo Provider
    public function prov()
    {
        return $this->belongsTo(Provider::class);
    }

    //alcanze con el modelo WereHouse
    public function wehouse()
    {
        return $this->belongsTo(WereHouse::class);
    }
    
}
