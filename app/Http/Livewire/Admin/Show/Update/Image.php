<?php

namespace App\Http\Livewire\Admin\Show\Update;

//Suport
use Livewire\Component;
//Models
use App\Models\Product;
use App\Models\Variation as Variacion;
use App\Traits\InteractsWithBanner;


class Image extends Component
{
    use InteractsWithBanner;

    public $product;
    public $variations;

    public function mount(Product $product)
    {
        $this->product=$product;
        $this->variations=$this->product->variation()->get();
    }

    public function render()
    {
        return view('livewire.admin.show.update.image');
    }
}
