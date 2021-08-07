<?php

namespace App\Http\Livewire\Admin\Tutorials;

use Livewire\Component;

class CreateTutorials extends Component
{
    public $apartados;

    public function mount()
    {
        $this->apartados=['Tutorial Paso a Paso','Tutorial Video'];
    }

    public function render()
    {
        return view('livewire.admin.tutorials.create-tutorials')->layout("layouts.admin");
    }
}
