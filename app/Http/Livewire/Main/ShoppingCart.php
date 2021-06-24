<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Product;

class ShoppingCart extends Component
{
    public function render()
    {
        return view('livewire.main.shopping-cart',[
            'products' => Product::where('category_id',6)->get()
        ]);
    }
}
