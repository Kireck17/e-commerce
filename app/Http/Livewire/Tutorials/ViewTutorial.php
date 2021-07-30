<?php

namespace App\Http\Livewire\Tutorials;

use Livewire\Component;

class ViewTutorial extends Component
{
    public function render()
    {
        return view('livewire.tutorials.view-tutorial')->layout('layouts.app');
    }
}
