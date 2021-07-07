<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Variation;
use App\Models\AttributeValue;

class AtributoVariation extends Component
{
    public $atribute_variation;

    protected $rules = [
        'atribute_variation.variation' => "equired",
        'atribute_variation.attribute' => "equired",
    ];
    protected $validationAttributes =[
        'atribute_variation.variation' => "Variación",
        'atribute_variation.attribute' => "Atributo",
    ];

    public function mount (){
        $this->atribute_variation = [];
    }

    public function render()
    {
        return view('livewire.admin.form.atributo-variation',[
            'attribute_values' => AttributeValue::all(),
            'variations' => Variation::all(),
        ])
        ->layout("layouts.admin");
    }
}
