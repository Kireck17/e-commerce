<?php

namespace App\Http\Livewire\Main;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
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
            'products' => Product::where('name','LIKE',"%{$this->search}%")->paginate(5),
        ])
        -> layout('layouts.app');
    }
}
