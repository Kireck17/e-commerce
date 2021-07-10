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
    public $description_show;
    public $plus_show;
    public $product;
    public $variation;

    protected $rules = [
        'product.description' => "required",
        'product.name' => "required"
    ];

    public function mount()
    {
        $this->search = "";
        $this->description_show = false;
        $this->plus_show = false;
        $this->product = [];
    }

    public function description($id)
    {

        $this->description_show = true;
        $this->product = Product::find($id);
    }
    public function plus($name)
    {

        $this->plus_show = true;
        $this->variation = $name;
    }
    public function cancel($active = 0)
    {
        if ($active != 0) {
            $this->description_show = false;
        } else {
            $this->plus_show = false;
        }
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
            'products' => Product::where('name', 'LIKE', "%{$this->search}%")->orderBy('name', 'ASC')->paginate(10),
            'variaciones' => Variation::whereHas('product',function(Builder $query){
                $query->where('id',$this->variation);
            })->get(),
        ])->layout("layouts.admin");
    }
}
