<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Product;

class UpdateProduct extends Component
{
    public $product;
    public $theproduct;

    protected $rules = [
        'theproduct.name' => "required",
        'theproduct.barcode' => "required",
        'theproduct.description' => "required",
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->theproduct = Product::find($product);
    }

    public function cancel()
    {
        return redirect()->to('/admin/showproduct');
    }

    public function render()
    {
        return view('livewire.admin.show.update-product',[
            'product' => $this->product,
            ])
        ->layout("layouts.admin");
    }
}
