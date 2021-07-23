<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;

use App\Models\Origin;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;
class ShowOrigin extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $ori;
    public $search;
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
        return view('livewire.admin.show.show-origin',[
            'origin'=> Origin::where('country','LIKE',"%{$this->search}%")->orderBy('country','ASC')->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
