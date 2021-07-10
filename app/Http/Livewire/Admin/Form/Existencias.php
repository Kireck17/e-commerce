<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Provider;
use App\Models\Stock;
use App\Models\Warehouse;
use App\Models\Kit;
use App\Models\Variation;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use App\Models\AttributeValue;
use App\Traits\InteractsWithBanner;


class Existencias extends Component
{
    use InteractsWithBanner;

    public $stock;
    public $product;

    protected $rules= [
        'stock.warehouse_id' => 'required',
        'stock.quantity' => 'required',
        'stock.price' => 'required',
        'stock.variation' => 'required',
        'product' => 'required'
    ];

    protected $validationAttributes =[
        'stock.warehouse_id' => 'Warehouse',
        'stock.quantity' => 'Quantity',
        'stock.price' => 'Price',
        'stock.variation' => 'Variación',
    ];
    
    public function mount(){
       $this->stock = [];
       $this->product="";
    }
    //where('name','LIKE','%'.$this->product.'%')->get()  Product::find($this->product)
    public function saveStock(){
        $this->validate();
        $variation = Variation::find($this->stock['variation']);
        $variation->stock()->save(new Stock($this->stock));
        $this->stock=[];
        $this->product="";
        $this->banner('Existencia(s) guardado(s) correctamente');
    }

    public function render()
    {
        return view('livewire.admin.form.stock',[
            'warehouses'=> WareHouse::all(),
            'variations'=> Variation::all(),
            'products'=> Product::all(),
            'variaciones' =>Variation::whereHas('product',function(Builder $query){
                $query->where('name',$this->product);
            })->get(),
        ])->layout("layouts.admin");
    }
}
