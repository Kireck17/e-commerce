<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=new Category();
        $categories->name="Accesorios";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Impresoras y Etiquetas";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Accesorios para Vehiculo";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Celulares y Telefonia";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Accesorios para Computo";
        $categories->save();

    }
}
