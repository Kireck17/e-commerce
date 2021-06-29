<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class Showproduct extends Component
{
    use WithPagination;

    public $product;


    public function mount(Product $product)
    {
        $this->product = $product;
    }


    public function render()
    {
        return view('livewire.product.showproduct',[
            'product' => $this->product,
            'trademark' => $this->product
                ->trademark()
                ->first()
                ->product()
                ->where('id','<>',$this->product->id)
                ->paginate(5), 
        ])
        -> layout('layouts.app');
    }
}
