<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    protected $table = 'attribute_values';

    protected $fillable=['attribute_id','value'];

   
    public function variation()
    {
        return $this->belongsToMany(Variation::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
