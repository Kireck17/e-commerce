<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    use HasFactory;

    protected $table = 'kits';

   // protected $fillable=['name'];

   //alcanze con el modelo Kid_Detail
    public function kitdetail()
    {
        return $this->belongsTo(KitDetail::class);
    }
    //alcanze con el modelo stock
    public function stock()
    {
        return $this->morphOne(Stock::class, 'stockable');
    }
   
}
