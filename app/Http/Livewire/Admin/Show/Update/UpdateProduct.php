<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;
use App\Models\Product;
use App\Models\Trademark;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Variation;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Traits\InteractsWithBanner;

class UpdateProduct extends Component
{
    use InteractsWithBanner;

    public $product;
    public $variations;
    public $files;
    public $apartados;

    protected $listeners=['variationsReload'];
    

    protected $rules = [
        'product.name' => "required",
        'product.barcode' => "required",
        'product.description' => "required",
        'product.trademark_id' => "required",
        'product.category_id' => "required",
        'product.subcategory_id' => "required",
    ];
    public function mount(Product $product_id)
    {
        $this->product = $product_id;
        $this->variations = $this->product->variation()->get();
        //$this->files = $this->product->variation()->first()->files()->get();
        $this->apartados=['Editor','Caracteristicas','Fotografia'];
    }
    public function variationsReload()
    {
        $this->variations = $this->product->variation()->get();
    }
    public function add_variation()
    {
        $this->product->variation()->save(new Variation());
        $this->variations = $this->product->variation()->get();
    }
    public function remove_variation($variation_id)
    {
        Variation::find($variation_id)->delete();
        $this->variations = $this->product->variation()->get();
        $this->banner('Variación eliminada correctamente','warning');
    }
    public function cancel()
    {
        return redirect()->route('admin.showproduct');
    }
    public function save()
    {
        $this->banner('Se actualizó el producto correctamente');
    }
    public function render()
    {
        return view('livewire.admin.show.update.update-product',[
            'product' => $this->product,
            'trademarks' => Trademark::all(),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            ])
        ->layout("layouts.admin");
    }
}
