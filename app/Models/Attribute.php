<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attribute';

    protected $fillable=['type'];
    

    //alcanze con el modelo Attribute_value
    public function attribut_value()
    {
        return $this->belongsTo(Attribute_value::class);
    }

}
