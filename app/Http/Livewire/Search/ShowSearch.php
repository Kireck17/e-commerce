<?php

namespace App\Http\Livewire\Search;

use Livewire\Component;

class ShowSearch extends Component
{
    public function render()
    {
        return view('livewire.search.show-search')
        ->layout('layouts.app');
    }
}
