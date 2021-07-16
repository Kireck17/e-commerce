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
        //1
        $categories=new Category();
        $categories->name="Accesorios Para Mascota";
        $categories->save();
        //2
        $categories=new Category();
        $categories->name="Anime";
        $categories->save();
        //3
        $categories=new Category();
        $categories->name="Electronica";
        $categories->save();
        //4
        $categories=new Category();
        $categories->name="Tecnologia";
        $categories->save();
        //5
        $categories=new Category();
        $categories->name="Accesorios para Computo";
        $categories->save();
        //6
        $categories=new Category();
        $categories->name="Dama";
        $categories->save();
        //7
        $categories=new Category();
        $categories->name="Hombre";
        $categories->save();
        //8
        $categories=new Category();
        $categories->name="Autos";
        $categories->save();


    }
}
