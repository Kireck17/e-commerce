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
        $stock-> stockable_id = 1;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 1;
        $stock -> warehouse_id =4;
        $stock -> quantity =10;
        $stock -> price = 200;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 2;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity =40;
        $stock -> price = 2000;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 3;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity =300;
        $stock -> price = 300;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 4;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity =50;
        $stock -> price = 102;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 5;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 1;
        $stock -> warehouse_id = 4;
        $stock -> quantity =55;
        $stock -> price = 350;
        $stock -> save();
        /*------------------------*/
        $stock = new Stock();
        $stock-> stockable_id = 6;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 7;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 8;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 9;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 10;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 11;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =42;
        $stock -> price = 860;
        $stock -> save();
        /*------------------------*/
        $stock = new Stock();
        $stock-> stockable_id = 12;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =20;
        $stock -> price = 5500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 13;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =30;
        $stock -> price = 120;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 14;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =16;
        $stock -> price = 160;
        $stock -> save();
        /* ------------------------*/
        $stock = new Stock();
        $stock-> stockable_id = 15;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 16;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 17;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 18;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 19;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 20;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 3;
        $stock -> quantity =42;
        $stock -> price = 850;
        $stock -> save();
        /* ------------------------*/
        $stock = new Stock();
        $stock-> stockable_id = 21;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id =3;
        $stock -> quantity =100;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 22;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 2;
        $stock -> warehouse_id = 2;
        $stock -> quantity =90;
        $stock -> price = 100;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 23;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 3;
        $stock -> warehouse_id = 2;
        $stock -> quantity =34;
        $stock -> price = 300;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 24;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 3;
        $stock -> warehouse_id = 4;
        $stock -> quantity =5;
        $stock -> price = 4400;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 25;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 3;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 6500;
        $stock -> save();
    
    }
}
