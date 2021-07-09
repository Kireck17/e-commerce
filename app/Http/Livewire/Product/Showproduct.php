<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variation;
use Livewire\WithPagination;


class Showproduct extends Component
{
    use WithPagination;

    public $product;
    public $quantity;
    public $variation;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->quantity = 1;
        $this->variation=$product->variation()->first()->id;
    }
    public function add(){
        if ($this->quantity < $this->get_stock()) {
            $this->quantity++;
        }
    }
    public function remove(){
        if($this->quantity > 1){
            $this->quantity--;
        }
    }
    public function get_images()
    {
         $variation=Variation::find($this->variation);
         return $variation->files()->get();
    }
    public function get_attributes()
    {
        $this->get_images();
        $this->get_stock();
        $variation=Variation::find($this->variation);
        return $variation->attribute_value()->get();
    }
    public function get_stock()
    {
        $variation=Variation::find($this->variation);
        return  $variation->stock()->first()->quantity;
    }

    public function render()
    {
        //dd($this->variation);
        return view('livewire.product.showproduct',[
            'product' => $this->product,
            'trademark' => $this->product
                ->trademark()
                ->first()
                ->product()
                ->where('id','<>',$this->product->id)
                ->paginate(5), 
        ])
        -> layout('layouts.app');
    }
}
