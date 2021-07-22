<?php

namespace App\Http\Livewire\Main;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;


class Showlobby extends Component
{
    use WithPagination;
    public $search;
    public $categories;

    public function mount()
    {
        $this->categories = Category::has('product')->get()->unique('name');
    }
    public function download_csv()
    {
        if (Storage::disk('public')->exists('templates/platilla-existencias.csv')) {
            Storage::disk('public')->delete('templates/platilla-existencias.csv');
        }
        $products=Product::with('variation.attribute_value.attribute')->get()->toArray();
        $productos=[];
        $productos[]="NO MODIFICAR EL NÚMERO DE LA COLUMNA VARIACIÓN";
        $productos[]="Producto,Variación,Proveedor,Almacén,Cantidad,Precio";
        foreach ($products as $product) {
            foreach ($product['variation'] as $variation) {
                $temp=[];
                $name=str_replace(",", "", $product['name']);
                foreach ($variation['attribute_value'] as $attribute_value) {
                    $name=$name." | ".$attribute_value['attribute']['type'].": ".$attribute_value['value'];
                }
                $temp[]=$name;
                $temp[]=$variation['id'];
                $productos[]=implode(',', $temp);
            }
        }
        $archivo=Storage::disk('public')->put('templates/platilla-existencias.csv',utf8_decode(implode("\r\n",$productos)));
        return Storage::disk('public')->download('templates/platilla-existencias.csv');
    }
    public function render()
    {
        return view('livewire.main.showlobby',
        [
            'products' => Product::where('name','LIKE',"%{$this->search}%")->paginate(5),
        ])
        -> layout('layouts.app');
    }
}
