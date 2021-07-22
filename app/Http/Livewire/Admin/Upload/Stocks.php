<?php

namespace App\Http\Livewire\Admin\Upload;

//suport
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\InteractsWithBanner;
//modals
use App\Models\Product;
use App\Models\Stock;
use App\Models\Provider;
use App\Models\WareHouse;
use App\Models\Variation;


class Stocks extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show;
    public $template;

    protected $rules=
    [
        'template' => 'required|mimetypes:text/plain'
    ];

    protected $messages = 
    [
        'template.mimetypes' => 'El campo :attribute debe ser con formato csv',
    ];

    protected $validationAttributes=
    [
        'template' => 'plantilla'
    ];

    public function mount()
    {
        $this->show=false;
    }

    public function show_modal()
    {
        $this->show=true;
    }
    
    public function download_template()
    {
        if (Storage::disk('public')->exists('templates/platilla-existencias.csv')) {
            Storage::disk('public')->delete('templates/platilla-existencias.csv');
        }
        $products=Product::with('variation.attribute_value.attribute')->get()->toArray();
        $productos=[];
        $productos[]="NO MODIFICAR EL NÚMERO DE LA COLUMNA VARIACIÓN";
        $productos[]="Producto,Variación,Proveedor,Almacén,Cantidad,Precio";
        foreach ($products as $product) {
            foreach ($product['variation'] as $variation) {
                $temp=[];
                $name=str_replace(",", "", $product['name']);
                foreach ($variation['attribute_value'] as $attribute_value) {
                    $name=$name." | ".$attribute_value['attribute']['type'].": ".$attribute_value['value'];
                }
                $temp[]=$name;
                $temp[]=$variation['id'];
                $productos[]=implode(',', $temp);
            }
        }
        $archivo=Storage::disk('public')->put('templates/platilla-existencias.csv',utf8_decode(implode("\r\n",$productos)));
        return Storage::disk('public')->download('templates/platilla-existencias.csv');
    }
    public function save_stoks()
    {
        $this->validate();
        $this->show=false;
        $save=$this->template->storePublicly('csv', 'public');
        if (Storage::disk('public')->exists($save)) 
        {
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
            foreach ($contents as $row)
            {
                $stock= [];
                $provider = Provider::where('name',$row[2])->get();
                $warehouse = WareHouse::where('name',$row[3])->get();
                $variation = Variation::where('id',$row[1])->get();

                if($provider->count())
                {
                    $provider= $provider->first();
                }
                else
                {
                    $provider = new Provider();
                    $provider->name=ucwords($row[2]);
                    $provider->save();
                }
                if($warehouse->count())
                {
                    $warehouse= $warehouse->first();
                }
                else
                {
                    $warehouse = new WareHouse();
                    $warehouse->name=ucwords($row[3]);
                    $warehouse->save();
                }
                if($variation->count())
                {
                    $variation= $variation->first();
                }
                else
                {
                    $variation= new Variation();
                    $variation->save();
                }

                $stock['provider_id']= $provider;
                $stock['warehouse_id']= $warehouse;
                $stock['quantity']= $row[4];
                $stock['price']= $row[5];
                $variationable= Variation::find($variation);
                $variationable->stock()->save(new Stock($stock));


            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Existencias cargados correctamente');

    }

    public function render()
    {
        return view('livewire.admin.upload.stocks');
    }
}
