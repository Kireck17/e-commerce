<?php

namespace App\Http\Livewire\Search;

use Livewire\Component;
use App\Models\Product;

class ShowSearch extends Component
{
    public $search;


    public function render()
    {
        return view('livewire.search.show-search',
        [
            'products' => Product::where('name','like',"%{$this->search}%")->get(),
        ])
        -> layout('layouts.app');
    }
}
