<?php

namespace App\Http\Livewire\Tutorials;

use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        return view('livewire.tutorials.content')->layout('layouts.app');
    }
}
