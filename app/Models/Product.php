<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable=['name','description','quantity', 'trademark_id', 'subcategory_id', 'category_id','barcode'];
    

    //alcanze con el modelo Trademark
    public function mark()
    {
        return $this->belongsTo(Trademark::class);
    }

    //alcanze con el modelo variation
    public function vari()
    {
        return $this->belongsTo(Variation::class);
    }
    

    //alcanze con el modelo SubCategory
    public function SubCate()
    {
        return $this->belongsTo(SubCategory::class);
    }

    //alcanze con el modelo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
