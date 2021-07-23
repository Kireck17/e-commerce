<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\Origin as Origenn;
use App\Traits\InteractsWithBanner;
class Origins extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $origenn;

    public function mount(Origenn $origenn)
    {
        $this->is_show=false;
        $this->origenn=$origenn;
        
    }
    
    public function remove()
    {
        $name=$this->origenn->country;
        $this->origenn->delete();
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
        return view('livewire.admin.delete.origins');
    }
}
