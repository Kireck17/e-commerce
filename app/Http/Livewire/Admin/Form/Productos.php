<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Product;
use App\Models\Trademark;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\InteractsWithBanner;
use App\Models\AttributeValue;
use App\Models\Attribute;
use App\Models\Variation;

class Productos extends Component
{
    use InteractsWithBanner;

    public $product;
    public $attribute_value;
    public $attributes;


    protected $rules = [
        'product.name' => "required|max:200|unique:products,name",
        'product.barcode' => "required",
        'product.description' => "required",
        'product.category_id' => "required",
        'product.subcategory_id' => "required",
        'product.trademark_id' => "required",
        'product.trademark_id' => "required",
        'attributes.*.type' => 'required',
        'attributes.*.value' => 'required'
    ];

    protected $validationAttributes = [
        'product.name' => "Nombre",
        'product.barcode' => "Codigo de barras",
        'product.description' => "Descripción",
        'product.category_id' => "Categoria",
        'product.subcategory_id' => "Sub categoria",
        'product.trademark_id' => "Marca",
        'attributes.*.type' => 'Característica',
        'attributes.*.value' => 'Valor'
    ];

    protected $listeners=['productReload' => 'render'];

    public function mount(){
       $this->product=[];
       $this->attributes=[];
    }
    public function add_attribute()
    {
        $this->attributes[]="";
    }
    public function get_attribute($index)
    {
       unset($this->attributes[$index]);
    }
    public function saveproduct(){
        $this->validate();
        if(count($this->attributes)){
            $products=new Product($this->product);
            $products->save();
            $variation=$products->variation()->save(new Variation());
            foreach ($this->attributes as $attribute) {
                $atributo=Attribute::where('type',$attribute['type'])->get();
                if ($atributo->count() == 0) {
                    $atributo=new Attribute($attribute);
                    $atributo->save();
                }else{
                    $atributo=$atributo->first();
                }
                $valor=new AttributeValue($attribute);
                $valor->attribute_id=$atributo->id;
                $variation->attribute_value()->save($valor);
            }
            $this->product=[];
            $this->attributes=[];
            $this->banner('Producto(s) guardado(s) correctamente');
        }else{
            $this->banner('Este producto no se le han agregado características','danger');
        }
    }
    public function render()
    {
        return view('livewire.admin.form.product',[
            'trademarks' => Trademark::all(),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'atrivute_values' => Attribute::all(),
        ])->layout("layouts.admin");
    }
}
