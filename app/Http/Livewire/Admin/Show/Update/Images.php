<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;
use App\Models\File;
use App\Models\Variation;
use Livewire\WithFileUploads;

class Images extends Component
{
    use WithFileUploads;
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
                
            }
       }
       //dd($this->files);
    }
    public function render()
    {
        return view('livewire.admin.show.update.images');
    }
}
