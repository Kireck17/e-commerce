<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;
use App\Models\Stock as Existencias;
use App\Models\Product;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;

class Stock extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $stock;
    public $produ;
    public $vari;

    public function mount(Existencias $stock)
    {
        $this->is_show=false;
        $this->stock=$stock;
        $this->produ=Product::all();
        $this->vari=Variation::all();
    }

    public function remove()
    {
        $name=$this->stock->name;
        
        $this->stock->delete();
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
        return view('livewire.admin.delete.stock');
    }
}
