<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Attribute;
use App\Traits\InteractsWithBanner;

class Atributo extends Component
{
    use InteractsWithBanner;

    public $attribute;
    
    protected $rules = [
        'attribute.type' => "required|max:200|unique:attributes,type",
    ];

    protected $validationAttributes = [
        'attribute.type' => "Nombre",
    ];

    public function Mount()
    {
       $this->attribute = [];
    }

    public function saveAttribute()
    {
      $this->validate();
      $atributes = new Attribute($this->attribute);
      $atributes->save();
      $this->attribute = [];
      $this->banner('Atibuto(s) guardado(s) correctamente');
    }
    public function render()
    {
        return view('livewire.admin.form.atributo')->layout("layouts.admin");
    }
}
