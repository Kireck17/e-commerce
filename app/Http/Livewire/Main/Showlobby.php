<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

use App\Models\Category;
use App\Models\Product;


class Showlobby extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.main.showlobby')
            ->layout('layouts.app');
    }
}
