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

    //
    protected $rules=[
        'wareho.name'=> "required|max:200",
    ];

    //
    protected $validationAttributes=[
        'wareho.name'=> "Nombre",
    ];

    public function mount()
    {
        $this->search="";
    }

    //EDITAR
    public function edit_wahouse($id)
    {
        $this->is_show=true;
        $this->wareho=WareHouse::find($id);
        $this->banner('WareHouse Editado correctamente');
        $this->emit('WareHouseReload');

    }

    //GUARDAR
    public function save_changes()
    {
        $this->wareho->save();
        $this->banner('WareHouse Actualizado correctamente!!');
        $this->emit('WareHouseReload');
        $this->is_show=false;
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
            'warehouse'=> WareHouse::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])->layout("layouts.admin");
    }
}
