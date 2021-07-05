<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Product;
use App\Models\Trademark;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\InteractsWithBanner;

class Productos extends Component
{
    use InteractsWithBanner;

    public $product;


    protected $rules = [
        'product.name' => "required|max:200|unique:products,name",
        'product.barcode' => "required",
        'product.description' => "required",
        'product.category_id' => "required",
        'product.subcategory_id' => "required",
        'product.trademark_id' => "required",
    ];

    protected $validationAttributes = [
        'product.name' => "Nombre",
        'product.barcode' => "Codigo de barras",
        'product.description' => "Descripción",
        'product.category_id' => "Categoria",
        'product.subcategory_id' => "Sub categoria",
        'product.trademark_id' => "Marca",
    ];

    public function Mount(){
       $this->product =[];
    }

    public function saveproduct(){
      $this->validate();
      $products=new Product($this->product);
      $products->save();
      $this->product=[];
      $this->banner('Producto(s) guardado(s) correctamente');
    }
    public function render()
    {
        return view('livewire.admin.form.product',[
            'trademarks' => Trademark::all(),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
        ])->layout("layouts.admin");
    }
}
