<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;
    protected $table = 'blogs_contents';

    protected $fillable=['blog_step_id','content'];

   
    
    //alcanze con el modelo BlogStep
    public function blogstep()
    {
        return $this->belongsTo(BlogStep::class);
    }

    //alcanze con el modelo File
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
