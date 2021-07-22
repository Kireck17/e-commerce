<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\Trademark as Marca;
use App\Traits\InteractsWithBanner;

class Trademarks extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $trademark;

    public function mount(Marca $trademark)
    {
        $this->is_show=false;
        $this->trademark=$trademark;
        $this->emit('recargar');
    }
    
    public function remove()
    {
        
        $this->trademark->delete();
        $this->is_show=false;
        $this->banner('Trademark Eliminado correctamente');
        $this->emit('recargar');
    }
   

    public function open_modal()
	{
		$this->is_show=true;
        
	}
    public function render()
    {
        return view('livewire.admin.delete.trademarks');
    }
}
