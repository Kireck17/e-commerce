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
        //1
        $trademark = new Trademark ();
        $trademark->name = 'Toopske';
        $trademark->save();
//2
        $trademark = new Trademark ();
        $trademark->name = 'Koz Ropa';
        $trademark->save();
//3
        $trademark = new Trademark ();
        $trademark->name = 'Bandai';
        $trademark->save();
//3
        $trademark = new Trademark ();
        $trademark->name = 'BAKU';
        $trademark->save();
//5
        $trademark = new Trademark ();
        $trademark->name = 'BMW';
        $trademark->save();
//6
        $trademark = new Trademark ();
        $trademark->name = 'XIAOMI';
        $trademark->save();
//7
        $trademark = new Trademark ();
        $trademark->name = 'MARIA BELA';
        $trademark->save();
//8 
        $trademark=new Trademark();
        $trademark->name="IKONO";
        $trademark->save();
//9
        $trademark=new Trademark();
        $trademark->name="Asix Modas";
        $trademark->save();
//10
        $trademark=new Trademark();
        $trademark->name="Palassi";
        $trademark->save();
//11
        $trademark=new Trademark();
        $trademark->name="GLAM SHOES";
        $trademark->save();
//12
        $trademark=new Trademark();
        $trademark->name="Thinner";
        $trademark->save();
//13
        $trademark=new Trademark();
        $trademark->name="Nfl Patriots";
        $trademark->save();
//14
        $trademark=new Trademark();
        $trademark->name="Contempo";
        $trademark->save();
//15
        $trademark=new Trademark();
        $trademark->name="Silver Plate";
        $trademark->save();

//16
        $trademark=new Trademark();
        $trademark->name="VAG COM";
        $trademark->save();
//17
        $trademark=new Trademark();
        $trademark->name="Carista";
        $trademark->save();

//18
        $trademark=new Trademark();
        $trademark->name="Monkey Wash";
        $trademark->save();
        
//19
        $trademark=new Trademark();
        $trademark->name="SAX CAR Boutique";
        $trademark->save();
    }
}
