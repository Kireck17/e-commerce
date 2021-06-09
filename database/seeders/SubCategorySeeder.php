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
        $subcategories->name="Calzado";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Pantalones";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Caballero";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="Dama";
        $subcategories->save();
        //
        $subcategories=new SubCategory();
        $subcategories->name="AElectronica";
        $subcategories->save();
    }
}
