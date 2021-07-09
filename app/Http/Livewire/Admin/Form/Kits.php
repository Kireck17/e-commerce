<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\InteractsWithBanner;

class Kits extends Component
{
    use InteractsWithBanner;

    public $name;
    public $kit_detail;

    protected $listeners=['details'];

    protected $rules=[
        'name' => 'required',
        'kit_detail.*.product' => 'required',
        'kit_detail.*.variation_id' => 'required',
        'kit_detail.*.quantity' => 'required',
    ];

    protected $validationAttributes=[
        'name' => 'Nombre del kit',
        'kit_detail.*.product' => 'producto',
        'kit_detail.*.variation_id' => 'Variacion',
        'kit_detail.*.quantity' => 'Cantidad',
    ];

    public function mount()
    {
        $this->name="";
        $this->kit_detail=[];
    }
    public function add_kit_detail()
    {
        $this->kit_detail[]="";
    }
    public function remove_kit_detail($index)
    {
        unset($this->kit_detail[$index]);
    }
    public function details($indice,$product,$variation_id,$quantity)
    {
        $this->kit_detail[$indice]=[
            'product' => $product,
            'variation_id' => $variation_id,
            'quantity' => $quantity,
        ];
    }
    public function save_kit()
    {
        dd($this->kit_detail);
    }
    public function render()
    {
        return view('livewire.admin.form.kits',[
            'fullvariations' => Variation::all(),
            /*'variations' => Variation::whereHas('product',function(Builder $query){
                $query->where('name',$this->product);
            })->get(),*/
        ])->layout("layouts.admin");
    }
}
