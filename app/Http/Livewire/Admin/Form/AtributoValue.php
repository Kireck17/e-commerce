<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Traits\InteractsWithBanner;

class AtributoValue extends Component
{
    use InteractsWithBanner;

    public $attribute_value;
    
    protected $rules = [
        'attribute_value.value' => "required|max:200|unique:attribute_values,value",
        'attribute_value.attribute_id' => "required"
    ];

    protected $validationAttributes = [
        'attribute_value.value' => "Nombre",
        'attribute_value.attribute_id' => "required"
    ];

    public function Mount()
    {
       $this->attribute_value = [];
    }

    public function saveAttributeValue()
    {
      $this->validate();
      $atribute_values = new AttributeValue($this->attribute_value);
      $atribute_values->save();
      $this->attribute_value = [];
      $this->banner('Valor(es) guardado(s) correctamente');
    }
    public function render()
    {
        return view('livewire.admin.form.atributo-value',[
            'atrivute_values' => Attribute::all(),
        ])->layout("layouts.admin");
    }
}
