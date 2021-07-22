<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;
use App\Models\AttributeValue;
use App\Models\Attribute;
use App\Models\Variation;
use App\Models\Product;
use App\Traits\InteractsWithBanner;

class Variationsadd extends Component
{

    use InteractsWithBanner;

    public $attribute_value;
    public $attributes;
    public $product;

    protected $listeners=['variationREMOVE' => 'render'];

    protected $rules = 
    [
        'attributes.*.type' => 'required',
        'attributes.*.value' => 'required'
    ];


    protected $validationAttributes = 
    [
        'attributes.*.type' => 'Característica',
        'attributes.*.value' => 'Valor'
    ];

    public function mount(Product $product)
    {
        $this->attributes=[];
        $this->product = $product;
    }

    public function add_attribute()
    {
        $this->attributes[]="";
    }

    public function get_attribute($index)
    {
       unset($this->attributes[$index]);
    }

    public function remove_attribute()
    {
        count($this->attributes)-1;
    }
    public function save_add_attribute()
    {
        if($this->validate())
        {
            if(count($this->attributes))
            {
                $variation=$this->product->variation()->save(new Variation());

                foreach ($this->attributes as $attribute) 
                {
                    $atributo=Attribute::where('type',$attribute['type'])->get();
                    
                    if ($atributo->count() == 0) 
                    {
                        $atributo=new Attribute($attribute);
                        $atributo->save();
                    }else
                    {
                        $atributo=$atributo->first();
                    }
                    
                    $valor=new AttributeValue($attribute);
                    $valor->attribute_id=$atributo->id;
                    $variation->attribute_value()->save($valor);
                    $this->banner('Característica(s) agregadas');
                }
                $this->attributes=[];
            }
        }
    }


    public function render()
    {
        return view('livewire.admin.show.update.variationsadd',
        [
            'atrivute_values' => Attribute::all(),   
        ]);
    }
}
