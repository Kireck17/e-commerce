<?php

namespace App\Http\Livewire\Admin\Show;

use App\Models\Category;
use Livewire\Component;

use Livewire\WithPagination;

class CategoryShow extends Component
{
    use WithPagination;
    
    public $search;
    public function mount()
    {
        $this->search="";
        
    }
    public function render()
    {
        return view('livewire.admin.show.category-show',[
            'category'=> Category::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
