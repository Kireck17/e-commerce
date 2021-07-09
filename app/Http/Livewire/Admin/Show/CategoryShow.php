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

    public function mount()
    {
        $this->search="";
        
    }

    //ELIMINAR UN CATEGORY
    public function remove_category($id)
    {
       
        $this->catt=Category::find($id);
        $this->catt->delete();
        $this->banner('Category Eliminado correctamente');
        $this->emit('CategoryReload');

    }

    public function render()
    {
        return view('livewire.admin.show.category-show',[
            'category'=> Category::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
