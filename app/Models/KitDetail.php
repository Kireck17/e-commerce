<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitDetail extends Model
{
    use HasFactory;
    protected $table = 'kit_details';

    protected $fillable=['kid_id','variation_id','quantity'];

    //alcanze con el modelo Variation
    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }
    
    //alcanze con el modelo Kid
    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }
}
