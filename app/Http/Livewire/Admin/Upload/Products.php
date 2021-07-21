<?php

namespace App\Http\Livewire\Admin\Upload;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Trademark;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Products extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show;
    public $template;
    public $attibuto;

    protected $rules=[
        'template' => 'required|mimetypes:text/plain'
    ];
    protected $messages = [
        'template.mimetypes' => 'El campo :attribute debe ser con formato csv',
    ];
    protected $validationAttributes=[
        'template' => 'plantilla'
    ];

    public function mount()
    {
        $this->show=false;
        $this->atributo="";
    }
    public function show_modal()
    {
        $this->show=true;
    }
    public function download_template()
    {
        return Storage::disk('public')->download('templates/plantilla-productos.csv');
    }
    public function save_products()
    {
        $this->validate();
        $this->show=false;
        $save=$this->template->storePublicly('csv', 'public');
        if (Storage::disk('public')->exists($save)) {
            $contents=Storage::disk('public')->get($save);
            $contents=explode("\r\n",$contents);
            $contents=array_filter($contents);
            for ($i=0; $i < count($contents); $i++) {
                $contents[$i]=str_getcsv($contents[$i],",");
            }
            array_shift($contents);
            array_shift($contents);
            for ($i=0; $i < count($contents); $i++) {
                $contents[$i]=array_filter($contents[$i]);
            }
            foreach ($contents as $row) {
                $product=new Product();
                $category=Category::where('name',$row[2])->get();
                $subcategory=Subcategory::where('name',$row[3])->get();
                $trademark=Trademark::where('name',$row[4])->get();
                if ($category->count()) {
                    $category=$category->first();
                }else{
                    $category=new Category();
                    $category->name=$row[2];
                    $category->save();
                }
                if ($subcategory->count()) {
                    $subcategory=$subcategory->first();
                }else{
                    $subcategory=new Subcategory();
                    $subcategory->name=$row[3];
                    $subcategory->save();
                }
                if ($trademark->count()) {
                    $trademark=$trademark->first();
                }else{
                    $trademark=new Trademark();
                    $trademark->name=$row[4];
                    $trademark->save();
                }
                $product->barcode=$row[0];
                $product->name=ucwords($row[1]);
                $product->category_id=$category->id;
                $product->subcategory_id=$subcategory->id;
                $product->trademark_id=$trademark->id;
                $product->description=$row[5];
                $product->save();
                $variation=$product->variation()->save(new Variation());
                $temp=[];
                for ($i=6; $i < count($row); $i++) {
                    if ($i%2 == 0) {
                        $f=$i;
                        $f++;
                        $atributo=$row[$i];
                        $valor=$row[$f];
                        $temp[]=[
                            $atributo,
                            $valor
                        ];
                    }
                }
                foreach ($temp as $atributos) {
                    $this->atributo=$atributos[0];
                    $attribute_value=AttributeValue::where('value',$atributos[1])
                        ->whereHas('attribute',function(Builder $attribute){
                            return $attribute->where('type',$this->atributo);
                        })->get();
                    if ($attribute_value->count()) {
                        $attribute_value=$attribute_value->first();
                        $variation->attribute_value()->attach($attribute_value->id);
                    }else{
                        $attribute=Attribute::where('type',$atributos[0])->get();
                        if ($attribute->count()) {
                            $attribute=$attribute->first();
                            $attribute_value=new AttributeValue(['attribute_id' => $attribute->id,'value' => $atributos[1]]);
                            $variation->attribute_value()->save($attribute_value);
                        }else{
                            $attribute=new Attribute(['type' => $atributos[0]]);
                            $attribute->save();
                            $attribute_value=new AttributeValue(['attribute_id' => $attribute->id,'value' => $atributos[1]]);
                            $variation->attribute_value()->save($attribute_value);
                        }
                    }
                }
            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Productos cargados correctamente');
    }
    public function render()
    {
        return view('livewire.admin.upload.products');
    }
}
