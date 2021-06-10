<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = new Stock();
        $stock-> kit_id = 1;
        $stock->provider_id = 1;
        $stock -> warehouse_id =4;
        $stock -> quantity = 1;
        $stock -> price = 200;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 2;
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 1;
        $stock -> price = 2000;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 3;
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 1;
        $stock -> price = 300;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 4;
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 1;
        $stock -> price = 102;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 5;
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 1;
        $stock -> price = 350;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 6;
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity = 1;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 7;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 1;
        $stock -> price = 5500;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 8;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 1;
        $stock -> price = 120;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 9;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 1;
        $stock -> price = 160;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 10;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 1;
        $stock -> price = 850;
        $stock -> save();
    
        $stock = new Stock();
        $stock-> kit_id = 11;
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity = 1;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 12;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 2;
        $stock -> quantity = 10;
        $stock -> price = 100;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 13;
        $stock->provider_id = 3;
        $stock -> warehouse_id = 2;
        $stock -> quantity = 1;
        $stock -> price = 300;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 14;
        $stock->provider_id = 3;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 2;
        $stock -> price = 4400;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 15;
        $stock->provider_id = 3;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 1;
        $stock -> price = 6500;
        $stock -> save();
    
    }
}
