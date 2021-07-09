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

    //
    protected $rules=[
        'provi.origin_id'=> "required",
        'provi.name'=> "required|max:200",
    ];

    //
    protected $validationAttributes=[
        'provi.origin_id'=> "Origen",
        'provi.name'=> "Nombre Proveedor",
    ];

    public function mount()
    {
        $this->search="";
        $this->or=Origin::all();
        $this->va=Variation::all();
    }

    //EDITAR
    public function edit_provider($id)
    {
        $this->is_show=true;
        $this->provi=Provider::find($id);
        $this->or=Origin::all();
        $this->va=Variation::all();
        $this->banner('Provider Editado correctamente');
        $this->emit('ProviderReload');

    }

    //GUARDAR
    public function save_changes()
    {
        $this->provi->save();
        $this->banner('Provider Actualizado correctamente!!');
        $this->emit('ProviderReload');
        $this->is_show=false;
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
            'provider'=> Provider::where('name','LIKE',"%{$this->search}%")->orderBy('name','ASC')->paginate(10),
        ])
        ->layout("layouts.admin");
    }
}
