<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Category;
use App\Traits\InteractsWithBanner;

class Categoria extends Component
{
    use InteractsWithBanner;
    public $category;

    protected $rules = [
        'category.name' => "required|max:200|unique:categories,name",
        'category.description' => "nullable",
    ];

    protected $validationAttributes = [
        'category.name' => "Nombre",
    ];

    public function Mount()
    {
       $this->category=[];
    }

    public function saveCategory(){
      $this->validate();
      $categorys=new Category($this->category);
      $categorys->save();
      $this->category=[];
      $this->banner('Categoría(s) guardada(s) correctamente');
    } 

    public function render()
    {
        return view('livewire.admin.form.category')->layout("layouts.admin");
    }
}
