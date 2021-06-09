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
        $stock -> warehouse_id =1 ;
        $stock -> quantity = 1;
        $stock -> price = 1000;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 2;
        $stock->provider_id = 2;
        $stock -> warehouse_id = 2;
        $stock -> quantity = 2;
        $stock -> price = 2000;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 3;
        $stock->provider_id = 3;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 3;
        $stock -> price = 300;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 4;
        $stock->provider_id = 4;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 4;
        $stock -> price = 400;
        $stock -> save();

        $stock = new Stock();
        $stock-> kit_id = 5;
        $stock->provider_id = 5;
        $stock -> warehouse_id = 5;
        $stock -> quantity = 5;
        $stock -> price = 500;
        $stock -> save();
    }
}
