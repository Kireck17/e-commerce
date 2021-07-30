<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variation as Variations;
use Illuminate\Database\Eloquent\Builder;


class Variation extends Component
{
    public $show;
    public $product;
    public $identifier;
    
    public function mount(Product $product)
    {
        $this->search = "";
        $this->show = false;
        $this->product = $product;
    }

    public function variation($id)
    {

        $this->show = true;
        $this->identifier = $id;
        $this->description = Product::where('id',$this->identifier)->get();
    }
    
    public function render()
    {
        return view('livewire.admin.show.variation', [

            'variaciones' => Variations::whereHas('product',function(Builder $query){
                $query->where('id',$this->identifier);
            })->get(),

        ]);
    }
}
