<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\Origin as Origenn;
use App\Traits\InteractsWithBanner;

class Origen extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $origenn;
    

    public function mount(Origenn $origenn)
    {
        $this->is_show=false;
        $this->origenn=$origenn;
        
    }

    protected $rules = [
        'origenn.country' => "required|max:200|unique:origins,country",
    ];

    protected $validationAttributes = [
        'origenn.country' => "Nombre",
    ];

    public function edit_componente()
	{
		$this->is_show=true;
	}
    public function save_changes()
	{
        $this->validate();
		$this->origenn->save();
        $this->is_show=false;
		$this->banner('Pais Editado correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}
    public function render()
    {
        return view('livewire.admin.edit.origen');
    }
}
