<?php

namespace App\Http\Livewire\Admin\Show;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;

class CategoryShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $catt;
    public $porpagina=5;
    
    protected $listeners=['recargar'=>'render'];

    public function mount()
    {
        $this->search="";
        
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function updatedPorpagina()
    {
        $this->resetPage();
    }

   

    public function render()
    {
        return view('livewire.admin.show.category-show',[
            'category'=> Category::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
