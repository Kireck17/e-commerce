<?php

namespace App\Http\Livewire\Tutorials;

use Livewire\Component;

class ViewContent extends Component
{
    public function render()
    {
        return view('livewire.tutorials.view-content')->layout('layouts.app');
    }
}
