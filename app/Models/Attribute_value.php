<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_value extends Model
{
    use HasFactory;
    protected $table = 'attribute_values';

    protected $fillable=['attribute_id','value'];

    //alcanze con el modelo Attribute_value_variation
    public function attributValueVari()
    {
        return $this->belongsTo(Attribute_value_variation::class);
    }

    //alcanze con el modelo Attribute
    public function attribut()
    {
        return $this->belongsTo(Attribute::class);
    }
    
}
