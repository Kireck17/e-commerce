<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.create')->layout("layouts.admin");
    }
}
