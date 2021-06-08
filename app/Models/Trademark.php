<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    protected $table = 'trademarks';

    protected $fillable=['name'];
    

    //alcanze con el modelo product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
