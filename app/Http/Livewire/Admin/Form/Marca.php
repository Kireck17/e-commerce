<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Trademark;
use App\Traits\InteractsWithBanner;

class Marca extends Component
{
    use InteractsWithBanner;
    public $trademark;

    protected $rules = [
        'trademark.name' => "required|max:200|unique:trademarks,name",
    ];

    protected $validationAttributes = [
        'trademark.name' => "Nombre",
    ];

    public function Mount()
    {
       $this->trademark = [];
       $this->category = [];
    }

    public function saveTrademark(){
      $this->validate();
      $trademarks = new Trademark($this->trademark);
      $trademarks->save();
      $this->trademark = [];
      $this->banner('Marca(s) guardada correctamente');
      $this->emit('productReload');
    }   

    public function render()
    {
        return view('livewire.admin.form.marca')->layout("layouts.admin");
    }
}
