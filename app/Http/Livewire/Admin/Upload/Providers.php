<?php

namespace App\Http\Livewire\Admin\Upload;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\InteractsWithBanner;

use App\Models\Provider;
use App\Models\Origin;
class Providers extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show;
    public $template;
    public $provider;

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
    public function download_template()
    {
        return Storage::disk('public')->download('templates/platilla-proveedor.csv');
    }
    public function save_providers()
    {
        $this->validate();
        $this->show=false;
        $save=$this->template->storePublicly('csv', 'public');

        if (Storage::disk('public')->exists($save))
        {
            $contents=Storage::disk('public')->get($save);
            $contents=explode("\r\n",$contents);
            $contents=array_filter($contents);

            for ($i=0; $i < count($contents); $i++)
            {
                $contents[$i]=str_getcsv($contents[$i],",");
            }

            array_shift($contents);

            for ($i=0; $i < count($contents); $i++) 
            {
                $contents[$i]=array_filter($contents[$i]);
            }

            foreach ($contents as $row)
            {
                
                $provider=Provider::where('name',$row[1])->get();
                $origin=Origin::where('country',$row[0])->get();
                if($origin->count())
                {
                    $origin=$origin->first();
                }
                else
                {
                    $origin=new Origin();
                    $origin->country=ucwords($row[0]);
                    $origin->save();
                }
                if($provider->count())
                {
                    $provider=$provider->first();
                }
                else
                {
                    $provider=new Provider();

                    $provider->name=ucwords($row[1]);
                    $provider->origin_id=$origin->id;
                    $provider->save();
                }
                
                
            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Proveedores cargados correctamente');
    }
    public function show_modal()
    {
        $this->show=true;
    }
    public function render()
    {
        return view('livewire.admin.upload.providers');
    }
}
