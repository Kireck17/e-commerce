<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Trademark;

class ShowTrademark extends Component
{
    use WithPagination;
    public $trademark;
    public $search;
    public $porpagina=2;
    

    protected $rules=[
        'trademark.name'=> "required|max:200",
    ];

    protected $validationAttributes=[
        '$trademark.name'=> "Nombre Marca Requerido",
    ];

    public function save_changes()
    {
        $this->trademark->save();
        $this->is_show=false;
    }

    
    public function edit_trademark($id)
    {
        $this->is_show=true;
        $this->trademark=Trademark::find($id);
    }


    public function remove_trademark($id)
    {
        $this->trademark=Trademark::find($id);
        $this->trademark->delete();
    }

    public function mount(Trademark $trademark)
    {
        $this->trademark=$trademark;
        $this->search="";
        $this->is_show=false;
    }
    
    public function render()
    {
        return view('livewire.admin.show.show-trademark',[
            
            'trademark' => $this->trademark,
            
        ])
        ->layout("layouts.admin");
    }  
}
