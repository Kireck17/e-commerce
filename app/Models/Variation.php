<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $table = 'variations';

    //protected $fillable=['attribute_value_variations','product_variations'];
    

    //alcanze con el modelo Attribute_value_variation
    public function attribut_va_vari()
    {
        return $this->belongsTo(Attribute_value_variation::class);
    }

    //alcanze con el modelo Product_variation
    public function ProdVari()
    {
        return $this->belongsTo(Product_variation::class);
    }

    //alcanze con el modelo Kid_Detail
    public function kidDet()
    {
        return $this->belongsTo(Kid_Detail::class);
    }

    

}
