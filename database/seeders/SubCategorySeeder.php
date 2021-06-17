<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $subcategories=new SubCategory();
        $subcategories->name="Sudaderas";
        $subcategories->save();
        //2
        $subcategories=new SubCategory();
        $subcategories->name="Figuras";
        $subcategories->save();
        //3
        $subcategories=new SubCategory();
        $subcategories->name="Articulos";
        $subcategories->save();
        //4
        $subcategories=new SubCategory();
        $subcategories->name="Celulares y Telefonia";
        $subcategories->save();
        //5
        $subcategories=new SubCategory();
        $subcategories->name="Herramientas";
        $subcategories->save();
        //6
        $subcategories=new SubCategory();
        $subcategories->name="Animales y Mascotas";
        $subcategories->save();
        //7
        $subcategories=new SubCategory();
        $subcategories->name="Ropa Deportiva";
        $subcategories->save();
        //8
        $subcategories=new SubCategory();
        $subcategories->name="Playeras";
        $subcategories->save();
        //9
        $subcategories=new SubCategory();
        $subcategories->name="Leggins";
        $subcategories->save();
        //10
        $subcategories=new SubCategory();
        $subcategories->name="Blusas";
        $subcategories->save();

        //11
        $subcategories=new SubCategory();
        $subcategories->name="Calzado";
        $subcategories->save();

        //12
        $subcategories=new SubCategory();
        $subcategories->name="Jeans";
        $subcategories->save();
    }
}
