<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Product;
use App\Models\ShoppingCart as Shopcart;
use App\Models\Stock;

class ShoppingCart extends Component
{
    public $product;
    public $shop;
    public $stock;

    public function mount()
    {
        $this->shop=Shopcart::find(auth()->user()->id)->get();
    }





    public function render()
    {
        return view('livewire.main.shopping-cart',[
            'products' => Product::where('category_id',6)->get(),
            'shopping'  => Shopcart::where('user_id',auth()->user()->id)->get(),
        ]);
    }
}

