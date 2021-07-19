<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';

    protected $fillable=['stockable_id','stockable_type','provider_id','warehouse_id','quantity','price'];
    

    public function stockable()
    {
        return $this->morphTo();
    }

    //alcanze con el modelo WereHouse
    public function warehouse()
    {
        return $this->belongsTo(WareHouse::class);
    }
}
