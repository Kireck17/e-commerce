<?php

namespace App\Http\Livewire\Admin\Upload;

use Livewire\Component;
use App\Models\Origin;
use App\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;

class Origins extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show;
    public $template;
    

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
        
    }
    public function show_modal()
    {
        $this->show=true;
    }
    public function download_template()
    {
        return Storage::disk('public')->download('templates/plantilla-origin.csv');
    }
    public function save_origins()
    {
        $this->validate();
        $this->show=false;
        $save=$this->template->storePublicly('csv', 'public');
        if (Storage::disk('public')->exists($save)) {
            $contents=Storage::disk('public')->get($save);
            $contents=str_replace(array("\n"), '',  $contents);
            $contents=explode("\r",$contents);
            
            $contents=array_filter($contents);
            for ($i=0; $i < count($contents); $i++) {
                $contents[$i]=str_getcsv($contents[$i],",");
            }
            array_shift($contents);
            
            for ($i=0; $i < count($contents); $i++) {
                $contents[$i]=array_filter($contents[$i]);
            }
            
            foreach ($contents as $row) {
                
                $origin=Origin::where('country',$row[0])->get();
                
                if ($origin->count()) {
                    $origin=$origin->first();
                }else{
                    $origin=new Origin();
                    $origin->country=ucwords($row[0]);
                    $origin->save();
                }
                
                
                
            }
            
            
        }
        Storage::disk('public')->delete($save);
        $this->banner('Paises cargados correctamente');
    }

    public function render()
    {
        return view('livewire.admin.upload.origins');
    }
}
