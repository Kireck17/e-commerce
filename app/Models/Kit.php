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
    public function kidDet()
    {
        return $this->belongsTo(Kid_Detail::class);
    }

   
}
