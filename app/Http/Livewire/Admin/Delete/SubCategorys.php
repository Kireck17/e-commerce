<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\SubCategory as SubCategoria;
use App\Traits\InteractsWithBanner;

class SubCategorys extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $subcategory;

    public function mount(SubCategoria $subcategory)
    {
        $this->is_show=false;
        $this->subcategory=$subcategory;
        $this->emit('recargar');
    }
    
    public function remove()
    {
        $name=$this->subcategory->name;
        $this->subcategory->delete();
        $this->is_show=false;
        $this->emit('recargar');
        $this->banner($name.' eliminado correctamente');
    }
   

    public function open_modal()
	{
		$this->is_show=true;
        
	}
    public function render()
    {
        return view('livewire.admin.delete.sub-categorys');
    }
}
