<?php

namespace App\Http\Livewire\Admin\Edit;

use Livewire\Component;
use App\Models\Category as Categoria;
use App\Traits\InteractsWithBanner;

class Category extends Component
{
    use InteractsWithBanner;
    public $is_show;
    public $category;
    

    public function mount(Categoria $category)
    {
        $this->is_show=false;
        $this->category=$category;
        $this->emit('recargar');
    }

    protected $rules = [
        'category.name' => "required|max:200",
        'category.description' => "max:200",
    ];

    protected $validationAttributes = [
        'category.name' => "Nombre",
        'category.description' => "Descripcion",
    ];

    public function edit_componente()
	{
		$this->is_show=true;
	}
    public function save_changes()
	{
        $this->validate();
		$this->category->save();
        $this->is_show=false;
		$this->banner('Categoria Editada correctamente');
		$this->emit('recargar');
	}

    public function cancelar()
	{
		$this->is_show=false;
	}
    public function render()
    {
        return view('livewire.admin.edit.category');
    }
}
