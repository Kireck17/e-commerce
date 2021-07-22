<?php

namespace App\Http\Livewire\Admin\Upload;

//suport
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\InteractsWithBanner;

//Models
use App\Models\Category;

class Categories extends Component
{
    use WithFileUploads, InteractsWithBanner;

    public $show;
    public $template;
    public $category;

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
        return Storage::disk('public')->download('templates/plantilla-categoria.csv');
    }

    public function save_trademarks()
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
                $category=Category::where('name',$row[0])->get();
                
                if($category->count())
                {
                    $category=$category->first();
                }
                else
                {
                    $category=new Category();
                    $category->name=ucwords($row[0]);
                }
                if(isset($row[1]))
                {
                    $category->description=$row[1];
                }
                $category->save();
            }
        }
        Storage::disk('public')->delete($save);
        $this->banner('Categoría cargados correctamente');
    }



    public function render()
    {
        return view('livewire.admin.upload.categories');
    }
}
