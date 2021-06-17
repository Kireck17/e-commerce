<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class ShowCategory extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category=$category;
    }

    public function render()
    {
        return view('livewire.category.show-category',[
            'category' => $this->category,
            'products' => $this->category->product()->get(),
        ])->layout('layouts.app');
    }
}
