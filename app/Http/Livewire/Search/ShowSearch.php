<?php

namespace App\Http\Livewire\Search;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ShowSearch extends Component
{
    use WithPagination;
    public $search;


    public function render()
    {
        return view('livewire.search.show-search',
        [
            'products' => Product::where('name','LIKE',"%{$this->search}%")->paginate(10),
        ])
        -> layout('layouts.app');
    }
}
