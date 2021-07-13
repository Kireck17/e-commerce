<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\Trademark as Marca;
use App\Traits\InteractsWithBanner;

class Trademark extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $trademark;
    

    public function mount(Marca $trademark)
    {
        $this->is_show=false;
        $this->trademark=$trademark;
        $this->emit('recargar');
    }

    protected $rules = [
        'trademark.name' => "required|max:200|unique:trademarks,name",
    ];

    protected $validationAttributes = [
        'trademark.name' => "Nombre",
    ];

    public function edit_componente()
	{
		$this->is_show=true;
        
	}
    public function save_changes()
	{
		$this->trademark->save();
        $this->is_show=false;
		$this->banner('Marca Editada correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}

    public function render()
    {
        return view('livewire.admin.edit.trademark');
    }
}
