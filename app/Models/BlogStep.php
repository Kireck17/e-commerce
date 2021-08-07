<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogStep extends Model
{
    use HasFactory;
    protected $table = 'blogs_steps';

    protected $fillable=['blog_id','title'];

   
    
    //alcanze con el modelo Blog
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    //alcanze con el modelo BlogContent
    public function blogcontent()
    {
        return $this->hasMany(BlogContent::class);
    }

    
}
