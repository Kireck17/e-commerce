<?php

namespace App\Http\Livewire\Admin\Tutorials\Forms;

use Livewire\Component;
use App\Models\BlogStep;
use App\Models\BlogContent;
use App\Traits\InteractsWithBanner;

class ContentBlogg extends Component
{
    use InteractsWithBanner;

    public $blogg;
    public $subtitle; 

    protected $listeners=['blogReload' => 'render'];

    protected $rules = [
        'blogg.content' => "required",
        'subtitle.*.title' => 'required',
        
    ];

    protected $validationAttributes = [
        'blogg.content' => "Contenido",
        'subtitle.*.title' => 'Subtitulo',
    ];

    public function mount(){
        $this->blogg=[];
        $this->subtitle=[];
    }

    public function add_content()
    {
        $this->blogg[]="";
    }
    public function get_content($index)
    {
       unset($this->blog[$index]);
    }

    public function render()
    {
        return view('livewire.admin.tutorials.forms.content-blogg',[
            
        ])->layout("layouts.admin");
    }
}
