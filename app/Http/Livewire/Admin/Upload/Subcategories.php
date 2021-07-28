<?php

namespace App\Http\Livewire\Admin\Upload;

use App\Models\Subcategory;
use App\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Subcategories extends Component
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
        return Storage::disk('public')->download('templates/plantilla-subcategorias.csv');
    }

    public function save_SubCategory()
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
                $subcate=Subcategory::where('name',$row[0])->get();
                if($subcate->count()) {
                    $subcate=$subcate->first();
                }else{
                    $subcate=new Subcategory();
                    $subcate->name=ucwords($row[0]);
                    $subcate->save();
                }

               
            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Sub Categorias cargados correctamente');
    }

    public function render()
    {
        return view('livewire.admin.upload.subcategories');
    }
}
