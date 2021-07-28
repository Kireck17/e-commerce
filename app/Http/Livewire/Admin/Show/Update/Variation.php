<?php

namespace App\Http\Livewire\Admin\Show\Update;

use App\Models\Product;
use App\Models\Variation as Variacion;
use App\Traits\InteractsWithBanner;
use Livewire\Component;

class Variation extends Component
{
    use InteractsWithBanner;

    public $product;
    public $variations;

    protected $listeners=['variationsReload'];
    public function mount(Product $product)
    {
        $this->product=$product;
        $this->variations=$this->product->variation()->get();
    }
    public function variationsReload()
    {
        $this->variations = $this->product->variation()->get();
    }
    public function add_variation()
    {
        $this->product->variation()->save(new Variacion());
        $this->variations = $this->product->variation()->get();
    }
    public function remove_variation($variation_id)
    {
        Variacion::find($variation_id)->delete();
        $this->variations = $this->product->variation()->get();
        $this->banner('Variación eliminada correctamente','warning');
    }
    public function render()
    {
        return view('livewire.admin.show.update.variation');
    }
}
