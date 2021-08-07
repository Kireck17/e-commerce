<?php

namespace App\Http\Livewire\Admin\Show\Update;

use App\Models\File;
use App\Models\Variation;
use App\Traits\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show_modal;
    public $variation;
    public $files;
    public $images;

    protected $rules = [
        'files.*.url' => "required",
        'images.*.url' => "required|image|max:1024",
    ];
    public function mount(Variation $variation)
    {
        $this->variation=$variation;
        $this->files = $this->variation->files()->get()->toArray();
        $this->images = [];
        $this->show_modal=false;
    }
    public function show_images()
    {
        $this->show_modal=true;
    }
    public function add_image()
    {
        $this->files[] = "";
    }
    public function change_old_image($image)
    {
        $image=str_replace("storage/", "", $image);
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
    }
    public function savefile()
    {
       foreach($this->files as $key => $file)
       {
            if(isset($file['id']))
            {
                if (isset($this->images[$key]['url'])) {
                    $this->change_old_image($file['url']);
                    $imagess = File::find($file['id']);
                    $imagess->url = "storage/".$this->images[$key]['url']->storePublicly('images',['disk' => 'public']);
                    $imagess->save();
                }
            }else{
                $imagess = new File();
                $imagess->url = "storage/".$this->images[$key]['url']->storePublicly('images',['disk' => 'public']);
                $this->variation->files()->save($imagess);
            }
       }
       $this->banner('Imágenes actualizadas correctamente');
       $this->files = $this->variation->files()->get()->toArray();
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
