<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\WareHouse as Almacen;
use App\Traits\InteractsWithBanner;

class WareHouse extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $waarehouse;
         
    public function mount(Almacen $waarehouse)
    {
        $this->is_show=false;
        $this->waarehouse=$waarehouse;
        $this->emit('recargar');
    }

    //
    protected $rules=[
        'waarehouse.name'=> "required|max:200|unique:warehouses,name",
    ];

    //
    protected $validationAttributes=[
        'waarehouse.name'=> "Nombre",
    ];

    //EDITAR
    public function edit_componente()
    {
        $this->is_show=true;
    }

    public function save_changes()
	{
        $this->validate();
		$this->waarehouse->save();
        $this->is_show=false;
		$this->banner('Almacen Editado correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}

    public function render()
    {
        return view('livewire.admin.edit.ware-house');
    }
}
