<?php

namespace App\Http\Livewire\Admin\Show;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Stock;
use App\Models\Provider;
use App\Models\WareHouse;
use App\Traits\InteractsWithBanner;


class StockShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $stocck;
    public $pro;
    public $ware;

    //
    protected $rules=[
        'stocck.stockable_type'=> "required|max:200",
        'stocck.provider_id'=> "required",
        'stocck.warehouse_id'=> "required",
        'stocck.quantity'=> "required",
        'stocck.price'=> "required",
    ];

    //
    protected $validationAttributes=[
        'stocck.stockable_type'=> "Stockable_type",
        'stocck.provider_id'=> "Proveedor",
        'stocck.warehouse_id'=> "Origen",
        'stocck.quantity'=> "Cantidad",
        'stocck.price'=> "Precio",
    ];

    public function mount()
    {
        $this->search="";
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
    }

    //EDITAR
    public function edit_stock($id)
    {
        $this->is_show=true;
        $this->stocck=Stock::find($id);
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
        $this->banner('Stock Editado correctamente');
        $this->emit('StockReload');

    }

    //GUARDAR
    public function save_changes()
    {
        $this->stocck->save();
        $this->banner('Stock Actualizado correctamente!!');
        $this->emit('StockReload');
        $this->is_show=false;
    }

    //ELIMINAR UN STOCK
    public function remove_stock($id)
    {
       
        $this->stocck=Stock::find($id);
        $this->stocck->delete();
        $this->banner('Stock Eliminado correctamente');
        $this->emit('StockReload');

    }

    public function render()
    {
        return view('livewire.admin.show.stock-show',[
            'stocks'=> Stock::where('price','LIKE',"%{$this->search}%")
            ->orderBy('price','ASC')
            ->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
