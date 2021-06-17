<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable=['name','description','quantity', 'trademark_id', 'subcategory_id', 'category_id','barcode'];
    

    /*
        Los nombres de las relaciones deben llevar el nombre de la tabla ya que nos arroja un arreglo vacío.

        public function mark()
        {
            return $this->belongsTo(Trademark::class);
        }
    */
    //alcanze con el modelo Trademark
    public function trademark()
    {
        return $this->belongsTo(Trademark::class);
    }
    //alcanze con el modelo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //alcanze con el modelo SubCategory
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    //alcanze con el modelo variation
    public function variation()
    {
        return $this->belongsToMany(Variation::class);
        /*
            La consulta a tablas pivote es con belongsToMany
            return $this->belongsTo(Variation::class);
        */
    }
    
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

}
