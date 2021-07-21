<?php

namespace App\Http\Livewire\Admin\Show\Update;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;
use Livewire\Component;

class Variations extends Component
{
    use InteractsWithBanner;

    public $variation;
    public $attribute_values;
    public $attributes;

    protected $rules = [
        'attribute_values.*.attribute_id' => "required",
        'attribute_values.*.value' => "required"
    ];

    public function mount(Variation $variation)
    {
        $this->variation=$variation;
        $this->attribute_values=$variation->attribute_value()->get()->toArray();
        $this->attributes=Attribute::all();
    }
    public function add_attribute()
    {
        $this->attribute_values[]="";
    }
    public function delete_attribute($attribute_id)
    {
        AttributeValue::find($attribute_id)->delete();
        $this->attribute_values=$variation->attribute_value()->get()->toArray();
        $this->banner('Attributo eliminado correctamente','warning');
    }
    public function remove_attribute($key)
    {
        unset($this->attribute_values[$key]);
        $this->banner('Attributo eliminado correctamente','warning');
    }
    public function save_attributes()
    {
        foreach ($this->attribute_values as $attribute_value) {
            if (isset($attribute_value['id'])) {
                $attribute=AttributeValue::find($attribute_value['id']);
                $attribute->fill($attribute_value);
                $attribute->save();
            }else{
                $this->variation->attribute_value()->save(new AttributeValue($attribute_value));
            }
        }
        $this->emit('variationsReload');
        $this->banner('Attributos agregados correctamente');
    }
    public function render()
    {
        return view('livewire.admin.show.update.variations');
    }
}
