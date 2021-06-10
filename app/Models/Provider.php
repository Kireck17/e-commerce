<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';

    protected $fillable=['origin_id','name'];
    

    //alcanze con el modelo Origin
    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    //alcanze con el modelo Stock
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    
}
