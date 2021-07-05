<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Origin;
use App\Traits\InteractsWithBanner;

class Origen extends Component
{
    use InteractsWithBanner;

    public $origin;

    protected $rules =[
        'origin.country' => "required|max:200|unique:origins,country",  
    ];

    protected $validationAttributes =[
        'origin.country' => "País",
    ];

    public function Mount(){
       $this->origin = [];
    }

    public function Save(){
      $this->validate();
      $origins = new Origin($this->origin);
      $origins-> save();
      $this->origin = [];
      $this->banner('Origen(es) guardada correctamente');
    }
    public function render(){
        return view('livewire.admin.form.origin')->layout("layouts.admin");
    }
}
