<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Create extends Component
{
    public $apartados;

    public function mount()
    {
        $this->apartados=['marcas','categorias','subcategorias','origen','almacenes','productos','proveedores','existencias','kits'];
    }
    public function render()
    {
        return view('livewire.admin.create')->layout("layouts.admin");
    }
}
