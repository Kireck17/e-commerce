<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    protected $fillable=['title'];

   
    //alcanze con el modelo File
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    //alcanze con el modelo BlogStep
    public function blogstep()
    {
        return $this->hasMany(BlogStep::class);
    }
}
