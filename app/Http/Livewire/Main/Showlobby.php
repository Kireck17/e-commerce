<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;


class Showlobby extends Component
{
    use WithPagination;
    public $search;
    public $categories;

    public function mount()
    {
        $this->categories = Category::has('product')->get()->unique('name');
    }

    public function render()
    {
        return view('livewire.main.showlobby',
        [
            'products' => Product::where('name','LIKE',"%{$this->search}%")->paginate(4),
        ])
        -> layout('layouts.app');
    }
}
