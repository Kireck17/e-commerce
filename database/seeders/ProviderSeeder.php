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

        $provider = new Provider();
        $provider -> origin_id = 1;
        $provider -> name = 'Anguel Zambenito de la Luz';
        $provider -> save();
        $provider -> variation()->attach(1);

        /*
        $provider = new Provider();
        $provider = save();
        $provider->variation()->attach(2);

        $provider = new Provider();
        $provider = save();
        $provider->variation()->attach(3);

        $provider = new Provider();
        $provider = save();
        $provider->variation()->attach(4);

        $provider = new Provider();
        $provider = save();
        $provider->variation()->attach(5);*/

    }
}
