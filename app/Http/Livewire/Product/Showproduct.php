<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Showproduct extends Component
{
    public function render()
    {
        return view('livewire.product.showproduct')
        -> layout('layouts.app');
    }
}
