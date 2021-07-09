<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\Trademark;
use Livewire\WithPagination;
class ShowTrademark extends Component
{
    use WithPagination;
    
    public $search;
    public function mount()
    {
        $this->search="";
    }
    
    public function render()
    {
        //Si no se pone el metodo paginate es necesario que lleve get()
        return view('livewire.admin.show.show-trademark',[
            'trademarks'=> Trademark::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
