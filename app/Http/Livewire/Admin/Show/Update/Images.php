<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;
use App\Models\File;
use App\Models\Variation;
use Livewire\WithFileUploads;
use App\Traits\InteractsWithBanner;

class Images extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $files;
    public $images;

    protected $rules = [
        'files.*.url' => "required",
        'images.*.url' => "required|image|max:1024",
    ];
    public function mount(Variation $variation)
    {
        $this->files = $variation->files()->get()->toArray();
        $this->images = [];
    }
    public function add_image()
    {
        $this->files[] = "";
    }
    public function savefile()
    {
       foreach($this->files as $key => $file)
       {
            if(isset($file['id']))
            {
                if(isset($images[$key]['url']))
                {
                    $imagess = File::find($file['id']);
                    $imagess->url = "storage/".$this->images[$key]['url']->storePublicly('images',['public']);
                    $imagess->save();
                }
            }
            else
            {
                $imagess = new File();
                $imagess->url = "storage/".$this->images[$key]['url']->storePublicly('images',['public']);
                $imagess->save();
            }
       }
       //dd($this->files);
    }

    public function delete_file($file_id)
    {
        $this->files= File::find($file_id)->delete();
        $this->files= $files->get()->toArray();
        $this->banner('Attributo eliminado correctamente','warning');
    }

    public function remove_file($key)
    {
        unset($this->files[$key]);
        $this->banner('Attributo eliminado correctamente','warning');
    }

    public function render()
    {
        return view('livewire.admin.show.update.images');
    }
}
