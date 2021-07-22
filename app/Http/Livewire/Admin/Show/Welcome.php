<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.admin.show.welcome')->layout("layouts.admin");
    }
}
