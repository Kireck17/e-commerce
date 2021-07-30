<?php

namespace App\Http\Livewire\Admin\Delete;

use Livewire\Component;

use App\Models\Product;
use App\Traits\InteractsWithBanner;

class Products extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $product;

    public function mount(Product $product)
    {
        $this->is_show=false;
        $this->product=$product;
    }
    
    public function remove()
    {
        $name=$this->product->name;
        $this->product->delete();
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
        return view('livewire.admin.delete.products');
    }
}
