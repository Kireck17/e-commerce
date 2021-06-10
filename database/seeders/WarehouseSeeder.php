<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WareHouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouse = new WareHouse();
        $warehouse -> name = 'centro';
        $warehouse ->save();

        $warehouse = new WareHouse();
        $warehouse -> name = 'centro industrial';
        $warehouse ->save();

        $warehouse = new WareHouse();
        $warehouse -> name = 'Parque Puebla';
        $warehouse ->save();

        $warehouse = new WareHouse();
        $warehouse -> name = 'Plaza Dorada';
        $warehouse ->save();


    }
}
