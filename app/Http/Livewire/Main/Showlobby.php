<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Showlobby extends Component
{
    public function render()
    {
        return view('livewire.main.showlobby')
            ->layout('layouts.app');
    }
}
