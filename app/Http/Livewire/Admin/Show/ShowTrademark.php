<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\Trademark;

class ShowTrademark extends Component
{
    public $trademarks;
    public $search;
    public function mount(Trademark $trademarks)
    {
        $this->trademarks=$trademarks;
        
    }
    
    public function render()
    {
        return view('livewire.admin.show.show-trademark',[
            'trademarks'=> Trademark::where('name','LIKE',"%{$this->search}%")
        ])
        ->layout("layouts.admin");
    }
}
