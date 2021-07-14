<?php

namespace App\Http\Livewire\Admin\Show\Update;

use App\Models\Attribute;
use App\Models\Variation;
use Livewire\Component;

class Variations extends Component
{

    public $attribute_values;
    public $attributes;

    protected $rules = [
        'attribute_values.*.attribute_id' => "required",
        'attribute_values.*.value' => "required"
    ];

    public function mount(Variation $variation)
    {
        $this->attribute_values = $variation->attribute_value()->get();
        $this->attributes=Attribute::all();
    }
    public function save_variations()
    {
        foreach ($this->attribute_values as $attribute_value) {
            $attribute_value->save();
        }
    }
    public function render()
    {
        return view('livewire.admin.show.update.variations');
    }
}
