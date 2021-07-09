<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\Origin;
use Livewire\WithPagination;
class ShowOrigin extends Component
{
    use WithPagination;
    
    public $search;
    public function mount()
    {
        $this->search="";
        
    }

    public function render()
    {
        return view('livewire.admin.show.show-origin',[
            'origin'=> Origin::where('country','LIKE',"%{$this->search}%")->orderBy('country','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
