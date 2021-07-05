<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class Showproduct extends Component
{
    use WithPagination;

    public $product;
    public $quantity;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->quantity = 1;
    }

    public function add(){
        
        
        $this->quantity++;
        
        
    } 

    public function remove(){
        if($this->quantity>1){

            $this->quantity--;
        }
    } 


    public function render()
    {
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
