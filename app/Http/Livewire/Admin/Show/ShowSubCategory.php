<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\SubCategory;
use Livewire\WithPagination;
class ShowSubCategory extends Component
{
    use WithPagination;
    
    public $search;
    public function mount()
    {
        $this->search="";
        
    }

    public function render()
    {
        return view('livewire.admin.show.show-sub-category',[
            'subcategory'=> SubCategory::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
