<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\SubCategory;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;
class ShowSubCategory extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $subca;
    public $search;
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
    public function remove($id)
    {
        $this->subcat=SubCategory::find($id);
        $this->subcat->delete();
        $this->banner('SubCategory Eliminada correctamente');
    }

    public function render()
    {
        return view('livewire.admin.show.show-sub-category',[
            'subcategory'=> SubCategory::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
