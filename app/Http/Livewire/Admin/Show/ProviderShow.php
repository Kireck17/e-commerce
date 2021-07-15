<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Provider;
use App\Models\Origin;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;

use Livewire\WithPagination;

class ProviderShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $search;
    public $provi;
    public $orig;
    public $vari;
    public $porpagina=5;

    
    //recargar a la hora de actualizar
    protected $listeners=['recargar'=>'render'];

   

    public function mount()
    {
        $this->search="";
        $this->or=Origin::all();
        $this->va=Variation::all();
    }

    public function updateSearch()
    {
        $this->resetPage();
    }


    //ELIMINAR UN PROVIDER
    public function remove_provider($id)
    {
       
        $this->provi=Provider::find($id);
        $this->provi->delete();
        $this->banner('Provider Eliminado correctamente');
        $this->emit('StockReload');

    }

    public function render()
    {
        return view('livewire.admin.show.provider-show',[
            'provider'=> Provider::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
