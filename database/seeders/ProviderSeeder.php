<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $provider = new Provider();
        $provider -> origin_id = 1;
        $provider -> name = 'Orlando Ivan Basulto Benitez';
        $provider -> save();
        
        $provider = new Provider();
        $provider -> origin_id = 2;
        $provider -> name = 'Armando Basulto Zamudio';
        $provider -> save();

        $provider = new Provider();
        $provider -> origin_id = 3;
        $provider -> name = 'Sergio David Roqdriges Vasques';
        $provider -> save();

        $provider = new Provider();
        $provider -> origin_id = 4;
        $provider -> name = 'Camilo Ramirez Zapata';
        $provider -> save();

        $provider = new Provider();
        $provider -> origin_id = 5;
        $provider -> name = 'Alfonzo Ramirez Zapata';
        $provider -> save();*/
//1
        $provider = new Provider();
        $provider -> origin_id = 1;
        $provider -> name = 'Mundo Mascota';
        $provider -> save();
        $provider -> variation()->attach(1);
        $provider -> variation()->attach(2);
        $provider -> variation()->attach(3);
        $provider -> variation()->attach(4);
        $provider -> variation()->attach(5);
        
        

        //2
        $provider = new Provider();
        $provider -> origin_id = 2;
        $provider -> name = 'Anime Market';
        $provider -> save();
        $provider -> variation()->attach(6);
        $provider -> variation()->attach(7);
        $provider -> variation()->attach(8);
        $provider -> variation()->attach(9);
        $provider -> variation()->attach(10);
        $provider -> variation()->attach(11);
        $provider -> variation()->attach(12);

        //3
        $provider = new Provider();
        $provider -> origin_id = 3;
        $provider -> name = 'Truper';
        $provider -> save();
        $provider -> variation()->attach(13);
        $provider -> variation()->attach(14);
   
        

        //4
        $provider = new Provider();
        $provider -> origin_id = 2;
        $provider -> name = 'Xiaomi';
        $provider -> save();
        $provider -> variation()->attach(15);

        //5
        $provider = new Provider();
        $provider -> origin_id = 1;
        $provider -> name = 'Fashion Mexico';
        $provider -> save();
        $provider -> variation()->attach(16);
        $provider -> variation()->attach(17);
        $provider -> variation()->attach(18);
        $provider -> variation()->attach(19);
        $provider -> variation()->attach(20);
        $provider -> variation()->attach(21);
        $provider -> variation()->attach(22);
        $provider -> variation()->attach(23);

        //6 seccion hombres
        $provider = new Provider();
        $provider -> origin_id = 3;
        $provider -> name = 'Fashion Mens';
        $provider -> save();
        $provider -> variation()->attach(24);
        $provider -> variation()->attach(25);
        $provider -> variation()->attach(26);
        $provider -> variation()->attach(27);
        $provider -> variation()->attach(28);

        //7 seccion automotriz
        $provider = new Provider();
        $provider -> origin_id = 4;
        $provider -> name = 'Pro Auto';
        $provider -> save();
        $provider -> variation()->attach(29);
        $provider -> variation()->attach(30);
        $provider -> variation()->attach(31);
        $provider -> variation()->attach(32);
        $provider -> variation()->attach(33);
        

    }
}
