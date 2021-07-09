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
        //
        $subcategories=new SubCategory();
        $subcategories->name="Sudaderas";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Figuras";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Articulos";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Celulares y Telefonia";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Herramientas";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Animales y Mascotas";
        $subcategories->save();
    }
}
