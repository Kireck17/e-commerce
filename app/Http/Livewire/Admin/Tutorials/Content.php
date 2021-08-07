<?php

namespace App\Http\Livewire\Admin\Tutorials;

use Livewire\Component;

class Content extends Component
{
    use InteractsWithBanner;

    public $blog;
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
        return view('livewire.admin.tutorials.content');
    }
}
