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

        $stock = new Stock();
        $stock-> stockable_id = 26;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 4;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();
    //
        $stock = new Stock();
        $stock-> stockable_id = 27;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 28;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 29;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 30;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 31;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 32;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 33;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 34;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 35;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =76;
        $stock -> price = 650;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 36;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 37;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 38;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 39;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 40;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 41;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =68;
        $stock -> price = 140;
        $stock -> save();

        


//
        $stock = new Stock();
        $stock-> stockable_id = 42;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 43;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id =44;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 45;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 46;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 47;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =35;
        $stock -> price = 550;
        $stock -> save();
//

        $stock = new Stock();
        $stock-> stockable_id = 48;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =76;
        $stock -> price = 150;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 49;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =76;
        $stock -> price = 150;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 50;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =76;
        $stock -> price = 150;
        $stock -> save();

        
//
        $stock = new Stock();
        $stock-> stockable_id = 51;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =61;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 52;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =61;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 53;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 1;
        $stock -> quantity =61;
        $stock -> price = 650;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 54;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 55;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 56;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 57;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 58;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 59;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 2;
        $stock -> quantity =39;
        $stock -> price = 700;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 60;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =30;
        $stock -> price = 1100;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 61;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =30;
        $stock -> price = 1100;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 62;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 3;
        $stock -> quantity =30;
        $stock -> price = 1100;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 63;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =20;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 64;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =20;
        $stock -> price = 650;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 65;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 5;
        $stock -> warehouse_id = 4;
        $stock -> quantity =20;
        $stock -> price = 650;
        $stock -> save();
//seccion de hombres
        $stock = new Stock();
        $stock-> stockable_id = 66;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity =20;
        $stock -> price = 210;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 67;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity =20;
        $stock -> price = 210;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 68;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity =20;
        $stock -> price = 210;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 69;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 2;
        $stock -> quantity =18;
        $stock -> price = 370;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 70;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 2;
        $stock -> quantity =18;
        $stock -> price = 370;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 71;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 2;
        $stock -> quantity =18;
        $stock -> price = 370;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 72;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 40;
        $stock -> price = 380;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 73;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 40;
        $stock -> price = 380;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 74;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 3;
        $stock -> quantity = 40;
        $stock -> price = 380;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 75;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 22;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 76;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 22;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 77;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 22;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 78;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 22;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 79;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 4;
        $stock -> quantity = 22;
        $stock -> price = 500;
        $stock -> save();
//
        $stock = new Stock();
        $stock-> stockable_id = 80;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 16;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 81;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 16;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 82;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 16;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 83;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 16;
        $stock -> price = 500;
        $stock -> save();

        $stock = new Stock();
        $stock-> stockable_id = 84;
        $stock-> stockable_type="App\Models\Variation";
        $stock->provider_id = 6;
        $stock -> warehouse_id = 1;
        $stock -> quantity = 16;
        $stock -> price = 500;
        $stock -> save();

    }
}
