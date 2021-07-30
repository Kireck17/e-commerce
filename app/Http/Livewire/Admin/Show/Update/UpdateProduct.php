<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;
use App\Models\Product;
use App\Traits\InteractsWithBanner;

class UpdateProduct extends Component
{
    use InteractsWithBanner;

    public $product;
    public $files;
    public $apartados;

    public function mount(Product $product_id)
    {
        $this->product = $product_id;
        //$this->files = $this->product->variation()->first()->files()->get();
        $this->apartados=['Editor','Caracteristicas','Fotografia'];
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
        return view('livewire.admin.show.update.update-product')
            ->layout("layouts.admin");
    }
}
