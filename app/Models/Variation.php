<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $table = 'variations';

    public function attribute_value()
    {
        return $this->belongsToMany(AttributeValue::class);
    }

    //alcanze con el modelo Product
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    //alcanze con el modelo Product
    public function provider()
    {
        return $this->belongsToMany(Provider::class);
    }

}
