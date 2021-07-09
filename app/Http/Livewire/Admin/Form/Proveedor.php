<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Provider;
use App\Models\Origin;
use App\Traits\InteractsWithBanner;

class Proveedor extends Component
{
    use InteractsWithBanner;

    public $provider;
    protected $rules = [
        'provider.name' => 'required|max:200|unique:providers,name',
        'provider.origin_id' => 'required'
    ];

    protected $validationAttributes =[
        'provider.name' => 'Nombre',
        'provider.origin_id' => 'Origen'];
    
    public function Mount()
    {
       $this->provider=[];
    }

    public function saveProvider(){
      $this->validate();
      $providers = new Provider($this->provider);
      $providers->save();
      $this->provider=[];
      $this->banner('Proveedor(es) guardado(s) correctamente');
    }

    public function render()
    {
        return view('livewire.admin.form.provider',[
            'origins'=>Origin::all(),
        ])->layout("layouts.admin");
    }
}
