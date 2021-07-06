<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Variation;
use App\Models\Product;
use App\Traits\InteractsWithBanner;

class Variaciones extends Component
{   
    use InteractsWithBanner;

    public $variation;


    protected $rules = [
        'variation.variation' => "required",
        'variation.product' => "required", 
    ];

    public function mount(){
       $this->variation = [];
    }

    public function saveVariation(){
        $this->validate();
        $variations = Product::find($this->variation['product']);
        $variations->variation()->save(new Variation($this->variation));
    }


    public function render()
    {
        return view('livewire.admin.form.variaciones',[
            'variations' => Variation::all(),
            'products' => Product::all(),
        ])
        ->layout("layouts.admin");
    }
}
