<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;

use App\Models\Category as Categoria;
use App\Traits\InteractsWithBanner;

class Categorys extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $category;

    public function mount(Categoria $category)
    {
        $this->is_show=false;
        $this->category=$category;
        
    }
    
    public function remove()
    {
        $name=$this->category->name;
        $this->category->delete();
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
        return view('livewire.admin.delete.categorys');
    }
}
