<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\Stock as Existencias;
use App\Models\Provider;
use App\Models\WareHouse;
use App\Models\Product;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;

class Stock extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $stock;
    public $pro;
    public $ware;
    public $produ;
    public $vari;

    public function mount(Existencias $stock)
    {
        $this->is_show=false;
        $this->stock=$stock;
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
        $this->produ=Product::all();
        $this->vari=Variation::all();
        $this->emit('recargar');
    }

    //
    protected $rules=[
        //'stock.stockable_type'=> "required|max:200",
        'stock.provider_id'=> "required",
        'stock.warehouse_id'=> "required",
        'stock.quantity'=> "required",
        'stock.price'=> "required",
    ];

    //
    protected $validationAttributes=[
        //'stock.stockable_type'=> "Stockable_type",
        'stock.provider_id'=> "Proveedor",
        'stock.warehouse_id'=> "Origen",
        'stock.quantity'=> "Cantidad",
        'stock.price'=> "Precio",
    ];

    //EDITAR
    public function edit_componente()
    {
        $this->is_show=true;
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
        $this->produ=Product::all();
        $this->vari=Variation::all();
    }

    public function save_changes()
	{
        $this->validate();
		$this->stock->save();
        $this->is_show=false;
		$this->banner('Existencia Editada correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}

    public function render()
    {
        return view('livewire.admin.edit.stock');
    }
}
