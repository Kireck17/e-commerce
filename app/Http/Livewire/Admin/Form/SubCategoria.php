<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\SubCategory;
use App\Traits\InteractsWithBanner;

class SubCategoria extends Component
{
    use InteractsWithBanner;

    public $subcategory;

    protected $rules = 
    [
        'subcategory.name' => "required|max:200|unique:subcategories,name",
    ];

    protected $validationAttributes = [
        'subcategory.name' => "Nombre",
    ];

    public function Mount()
    {
       $this->subcategory = [];
    }

    public function Save()
    {
      $this->validate();
      $subcategorys = new SubCategory($this->subcategory);
      $subcategorys -> save();
      $this->subcategory = [];
      $this->banner('Sub categoría(s) guardada(s) correctamente');
    }
    public function render()
    {
        return view('livewire.admin.form.sub-categoria')->layout("layouts.admin");
    }
}
