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
        $trademark = new Trademark ();
        $trademark->name = 'Carista';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Adidas';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Nike';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Jordan';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'BMW';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Adventure';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Sony';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Alcatel';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Motorola';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Sams';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Ferrari';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Gucci';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Balenciaga';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'LobosBuap';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Pirma';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Charly';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Underarmor';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'LG';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'LuisButton';
        $trademark->save();

        $trademark = new Trademark ();
        $trademark->name = 'Sony is real';
        $trademark=new Trademark();
        $trademark->name="Redmi";
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
