<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Trademark;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;

class ShowTrademark extends Component
{
    use WithPagination,InteractsWithBanner;

    public $search;
    public $mark;
    public $porpagina=5;
    
    protected $listeners=['recargar'=>'render'];


    public function mount()
    {
        $this->search="";
    }
    
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function updatedPorpagina()
    {
        $this->resetPage();
    }
    public function render()
    {
        //Si no se pone el metodo paginate es necesario que lleve get()
        return view('livewire.admin.show.show-trademark',[
            'trademarks'=> Trademark::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}