<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trademark;


class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //marca de mascotas y animales
        $trademark = new Trademark ();
        $trademark->name = 'Toopske';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Koz Ropa';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Bandai';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'BAKU';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'BMW';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'XIAOMI';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'LuisButton';
        $trademark->save();

    
        $trademark=new Trademark();
        $trademark->name="Samsung";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="Sony";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="Alcatel";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="LG";
        $trademark->save();
    }
}
