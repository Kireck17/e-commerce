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
        $categories->name="Anime";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Electronica";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Tecnologia";
        $categories->save();
        //
        $categories=new Category();
        $categories->name="Accesorios para Computo";
        $categories->save();

    }
}
