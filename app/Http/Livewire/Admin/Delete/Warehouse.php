<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\WareHouse as Almacen;
use App\Traits\InteractsWithBanner;

class Warehouse extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $waarehouse;

    public function mount(Almacen $waarehouse)
    {
        $this->is_show=false;
        $this->waarehouse=$waarehouse;
    }
    
    public function remove()
    {
        $name=$this->waarehouse->name;
        $this->waarehouse->delete();
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
        return view('livewire.admin.delete.warehouse');
    }
}
