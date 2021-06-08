<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WereHouse extends Model
{
    use HasFactory;
    protected $table = 'warehouses';

    protected $fillable=['name'];
  
}
