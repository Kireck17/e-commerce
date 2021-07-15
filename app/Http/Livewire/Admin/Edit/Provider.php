<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\Provider as Proveedor;
use App\Models\Origin;
use App\Traits\InteractsWithBanner;

class Provider extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $providder;
    public $orig;


    public function mount(Proveedor $providder)
    {
        $this->is_show=false;
        $this->providder=$providder;
        $this->orig=Origin::all();
        $this->emit('recargar');
    }

     //
     protected $rules=[
        'providder.origin_id'=> "required",
        'providder.name'=> "required|max:200",
    ];

    //
    protected $validationAttributes=[
        'providder.origin_id'=> "Origen",
        'providder.name'=> "Nombre Proveedor",
    ];

    //EDITAR
    public function edit_componente()
    {
        $this->is_show=true;
        $this->orig=Origin::all();
        
    }

    public function save_changes()
	{
        $this->validate();
		$this->providder->save();
        $this->is_show=false;
		$this->banner('Proveedor Editado correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}

    public function render()
    {
        return view('livewire.admin.edit.provider');
    }
}
