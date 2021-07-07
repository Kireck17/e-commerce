<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Provider;
use App\Models\Stock;
use App\Models\Warehouse;
use App\Models\Kit;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;


class Existencias extends Component
{
    use InteractsWithBanner;

    public $stock;

    protected $rules= [
        'stock.provider_id' => 'required',
        'stock.warehouse_id' => 'required',
        'stock.quantity' => 'required',
        'stock.price' => 'required',
        'stock.variation' => 'required'
    ];

    protected $validationAttributes =[
        'stock.provider_id' => 'Provider',
        'stock.warehouse_id' => 'Warehouse',
        'stock.quantity' => 'Quantity',
        'stock.price' => 'Price',
        'stock.variation' => 'Variación',
    ];
    
    public function Mount(){
       $this->stock = [];
    }

    public function saveStock(){
        $this->validate();
        $variation = Variation::find($this->stock['variation']);
        $variation->stock()->save(new Stock($this->stock));
        $this->stock=[];
        $this->banner('Existencia(s) guardado(s) correctamente');
    }

    public function render()
    {
        return view('livewire.admin.form.stock',[
            'providers' => Provider::all(),
            'warehouses'=> WareHouse::all(),
            'variations'=> Variation::all(),
        ])->layout("layouts.admin");
    }
}
