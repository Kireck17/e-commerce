<?php

namespace App\Http\Livewire\Admin\Upload;

use App\Models\WareHouse;
use App\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Warehouses extends Component
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
        return Storage::disk('public')->download('templates/plantilla-almacen.csv');
    }

    public function save_warehouse()
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


            for ($i=0; $i < count($contents); $i++) {
                $contents[$i]=array_filter($contents[$i]);
            }

            foreach ($contents as $row) {
                $ware=WareHouse::where('name',$row[0])->get();
                if($ware->count()) {
                    $ware=$ware->first();
                }else{
                    $ware=new WareHouse();
                    $ware->name=ucwords($row[0]);
                    $ware->save();
                }
                
            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Almacen cargados correctamente');
    }

    public function render()
    {
        return view('livewire.admin.upload.warehouses');
    }
}
