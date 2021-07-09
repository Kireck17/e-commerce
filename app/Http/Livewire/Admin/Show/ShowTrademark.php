<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Trademark;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;

class ShowTrademark extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $mark;

    public function mount()
    {
        $this->search="";
    }
    
    //ELIMINAR UN TRADEMARK 
    public function remove_trademark($id)
    {
       
        $this->mark=Trademark::find($id);
        $this->mark->delete();
        $this->banner('Trademark Eliminado correctamente');
        $this->emit('TrademarkReload');

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