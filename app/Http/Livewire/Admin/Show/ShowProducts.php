<?php

namespace App\Http\Livewire\Admin\Show;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Builder;

class ShowProducts extends Component
{
    use WithPagination;

    public $search;
    public $show;
    public $identifier;
    public $porpagina=5;
    public $description;

    

    public function mount()
    {
        $this->search = "";
        $this->show = false;
        $this->product = [];
        $this->description= "";
    }

    public function variation($id)
    {

        $this->show = true;
        $this->identifier = $id;
        $this->description = Product::where('id',$this->identifier)->get();
    }

    //ELIMINAR UN PRODUCT
    public function remove_product($id)
    {

        $this->product = product::find($id);
        $this->product->delete();
        $this->banner('product Eliminado correctamente');
        $this->emit('productReload');
    }

    public function render()
    {
        return view('livewire.admin.show.show-products', [
            'products' => Product::where('name', 'LIKE', "%{$this->search}%")
                ->orderBy('name', 'ASC')
                ->paginate($this->porpagina),

            'variaciones' => Variation::whereHas('product',function(Builder $query){
                $query->where('id',$this->identifier);
            })->get(),

        ])->layout("layouts.admin");
    }
}
