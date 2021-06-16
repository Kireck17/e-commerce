<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable=['name'];
   
     //alcanze con el modelo File
     public function file()
     {
         return $this->morphOne(File::class);
     }
}
