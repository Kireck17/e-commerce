<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class MensClothing extends Component
{
    public function render()
    {
        return view('livewire.main.mens-clothing')
        ->layout('layouts.app');
    }
}
