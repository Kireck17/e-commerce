<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_value_variation extends Model
{
    use HasFactory;
    protected $table = 'attribute_value_variation';

    protected $fillable=['attribute_value_id','variation_id'];

    //alcanze con el modelo Attribute_value
    public function attribut_value()
    {
        return $this->belongsTo(Attribute_value::class);
    }

     //alcanze con el modelo Variation
     public function variation()
     {
         return $this->belongsTo(Variation::class);
     }
}
