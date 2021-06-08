<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_value extends Model
{
    use HasFactory;
    protected $table = 'attribute_values';

    protected $fillable=['attribute_id','value'];

    //alcanze con el modelo Attribute
    public function attribut()
    {
        return $this->belongsTo(Attribute::class);
    }
}
