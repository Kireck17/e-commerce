<?php

namespace App\Http\Livewire\Admin\Show\Update;

use App\Models\Product as Producto;
use App\Models\Trademark;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\InteractsWithBanner;
use Livewire\Component;

class Product extends Component
{
    use InteractsWithBanner;

    public $product;

    protected $rules = [
        'product.name' => "required",
        'product.barcode' => "required",
        'product.description' => "required",
        'product.trademark_id' => "required",
        'product.category_id' => "required",
        'product.subcategory_id' => "required",
    ];
    protected $validationAttributes=[
        'product.name' => "nombre",
        'product.barcode' => "código de barras",
        'product.description' => "descripción",
        'product.trademark_id' => "marca",
        'product.category_id' => "categoria",
        'product.subcategory_id' => "subcategoria",
    ];
    public function mount(Producto $product)
    {
       $this->product = $product;
    }
    public function save()
    {
        $this->validate();
        $this->product->save();
        $this->banner('Se actualizó el producto correctamente');
    }
    public function render()
    {
        return view('livewire.admin.show.update.product',[
            'trademarks' => Trademark::all(),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
        ]);
    }
}
