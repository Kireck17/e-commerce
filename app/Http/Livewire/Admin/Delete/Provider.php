<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\Provider as Proveedor;
use App\Traits\InteractsWithBanner;

class Provider extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $providder;


    public function mount(Proveedor $providder)
    {
        $this->is_show=false;
        $this->providder=$providder;
    }

    public function remove()
    {
        $name=$this->providder->name;
        $this->providder->delete();
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
        return view('livewire.admin.delete.provider');
    }
}
