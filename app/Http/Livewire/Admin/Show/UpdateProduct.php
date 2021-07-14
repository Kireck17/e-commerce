<?php

namespace App\Http\Livewire\Admin\Show;

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
    }

    public function cancel()
    {
        return redirect()->route('admin.showproduct');
    }
    public function save()
    {
        $this->emit('save_variations');
        $this->banner('Se actualizó el producto correctamente');
    }
    public function render()
    {
        return view('livewire.admin.show.update-product',[
            'product' => $this->product,
            'trademarks' => Trademark::all(),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'variations' => Variation::all(),
            'attributes' => Attribute::all(),
            'attributevalues' => AttributeValue::all(),
            ])
        ->layout("layouts.admin");
    }
}
