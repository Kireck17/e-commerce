<?php

namespace App\Http\Livewire\Admin\Form;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Combo extends Component
{
    public $indice;
    public $product;
    public $variation_id;
    public $quantity;

    public function mount()
    {
        $this->product="";
        $this->variation_id="";
        $this->quantity=0;
    }
    public function agregar()
    {
        if ($this->product!="" && $this->variation_id!="" && $this->quantity!=0) {
            $this->emitUp('details',$this->indice,$this->product="", $this->variation_id="", $this->quantity=0);
            $this->kit_detail=[
                'product' => $this->product,
                'variation_id' => $this->variation_id,
                'quantity' => $this->quantity
            ];
        }
    }
    public function render()
    {
        return view('livewire.admin.form.combo',[
            'products' => Product::all(),
            'variations' => Variation::whereHas('product',function(Builder $query){
                $query->where('name',$this->product);
            })->get(),
        ]);
    }
}
