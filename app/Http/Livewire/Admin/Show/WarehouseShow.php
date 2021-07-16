<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\WareHouse;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;

class WarehouseShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $wareho;
    public $porpagina=5;


    //recargar a la hora de actualizar
    protected $listeners=['recargar'=>'render'];

    public function mount()
    {
        $this->search="";
    }

    public function updateSearch()
    {
        $this->resetPage();
    }

    //ELIMINAR UN WAREHOUSE
    public function remove_wahouse($id)
    {
       
        $this->wareho=WareHouse::find($id);
        $this->wareho->delete();
        $this->banner('WareHouse Eliminado correctamente');
        $this->emit('WareHouseReload');

    }

    public function render()
    {
        return view('livewire.admin.show.warehouse-show',[
            'warehouse'=> WareHouse::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate($this->porpagina),
        ])->layout("layouts.admin");
    }
}
