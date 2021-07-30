<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class kitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        //
    {
        /*for ($i=0; $i < 300; $i++) {
            $kits=new Kit();
            $kits->save();
        }*/
        /*$kits=new Kit();
        $kits->name="Kit moda europea";
        $kits->save();*/
        $kits=new Kit();
        $kits->name="Kit ropa deportiva dama chica";
        $kits->save();
        $kits=new Kit();
        $kits->name="Kit ropa deportiva dama mediana";
        $kits->save();
        $kits=new Kit();
        $kits->name="Kit ropa deportiva dama grande";
        $kits->save();
        $kits=new Kit();
        $kits->name="Kit moda europea chica";
        $kits->save();
        $kits=new Kit();
        $kits->name="Kit moda europea mediana";
        $kits->save();
        $kits=new Kit();
        $kits->name="Kit moda europea grande";
        $kits->save();
    }
}
