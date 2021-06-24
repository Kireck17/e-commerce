<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Showproduct extends Component
{
    public function render()
    {
        return view('livewire.product.showproduct',[
            'products' => Product::all()
        ])
        -> layout('layouts.app');
    }
}
