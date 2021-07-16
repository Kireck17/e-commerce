<?php

namespace App\Http\Livewire\Admin\Show;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Stock;
use App\Models\Provider;
use App\Models\WareHouse;
use App\Models\Product;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;


class StockShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $stocck;
    public $pro;
    public $ware;
    public $produ;
    public $vari;
    public $porpagina=5;

    
    //recargar a la hora de actualizar
    protected $listeners=['recargar'=>'render'];

    public function mount()
    {
        $this->search="";
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
        $this->produ=Product::all();
        $this->vari=Variation::all();
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
            ->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
