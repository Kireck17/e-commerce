<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCategory extends Component
{
    use WithPagination;

    public $category;
    public $search;

    
    //Search aparece solo si se realiza una busqueda
    protected $queryString=['search'=>['except'=>""]];

    public function mount(Category $category)
    {
        $this->category=$category;
        $this->search="";
        
    }

    public function render()
    {
        return view('livewire.category.show-category',[
            
            'category' => $this->category,
            //where para realizar la busqueda
            'products' => $this->category->product()->where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(5),
            
        ])->layout('layouts.app');
    }
}
