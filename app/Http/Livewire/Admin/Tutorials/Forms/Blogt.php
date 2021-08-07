<?php

namespace App\Http\Livewire\Admin\Tutorials\Forms;

use Livewire\Component;
use App\Models\Blog;
use App\Models\BlogStep;
use App\Models\BlogContent;
use App\Traits\InteractsWithBanner;

class Blogt extends Component
{
    use InteractsWithBanner;
    public $blogs;
    public $stepblog;
    public $contentblog;

    protected $listeners=['blogReload' => 'render'];

    protected $rules = [
        'blogs.title' => "required|max:200|unique:blogs,title",
        'blogs.image' => 'required',
        'stepblog.*.title' => 'required',
        'contentblog.*.image' => 'required',
        'contentblog.*.content' => 'required'
    ];

    protected $validationAttributes = [
        'blogs.title' => "Titulo Blog",
        'blogs.*.image' => 'Imagen',
        'stepblog.*.title' => 'Sub titulo',
        'contentblog.*.image' => 'Imagen',
        'contentblog.*.content' => 'Contenido'
    ];

    public function mount()
    {
       $this->blogs=[];
       $this->stepblog=[];
       $this->contentblog=[];
    }


    public function add_contentblog()
    {
        $this->contentblog[]="";
    }

    public function remove_contentblog($key)
    {
        unset($this->contentblog[$key]);
        $this->banner('Contenido eliminado correctamente','warning');
    }

    public function add_stepblog()
    {
        $this->stepblog[]="";
    }

    public function remove_stepblog($key)
    {
        unset($this->stepblog[$key]);
        $this->banner('Subtitulo eliminado correctamente','warning');
    }

    public function get_attribute($index)
    {
       unset($this->contentblog[$index]);
       unset($this->stepblog[$index]);
    }


    public function saveproduct(){
        if ($this->validate()) {
            if(count($this->stepblog)){
                $blogs=new Blog($this->blogs);
                $blogs->save();
                $step=$blogs->blogstep()->save(new BlogStep());
                foreach ($this->stepblog as $stepblo) {
                    $atributo=Attribute::where('type',$attribute['type'])->get();
                    if ($atributo->count() == 0) {
                        $atributo=new Attribute($attribute);
                        $atributo->save();
                    }else{
                        $atributo=$atributo->first();
                    }
                    $valor=new AttributeValue($attribute);
                    $valor->attribute_id=$atributo->id;
                    $variation->attribute_value()->save($valor);
                }
                $this->product=[];
                $this->attributes=[];
                $this->banner('Producto(s) guardado(s) correctamente');
            }else{
                $this->banner('Este producto no se le han agregado características','danger');
            }
        }else{
            $this->banner('Llena los datos por favor','danger');
        }
    }


    public function saveBlog(){
      $this->validate();
      $blogs = new Blog($this->blogs);
      $blogs->save();
      $this->blogs = [];
      $this->banner('Blog guardado correctamente');
      //$this->emit('productReload');
    }   

    
    public function render()
    {
        return view('livewire.admin.tutorials.forms.blogt')->layout("layouts.admin");
    }
}
