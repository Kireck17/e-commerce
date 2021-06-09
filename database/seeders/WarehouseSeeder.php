<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WereHouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouse = new WereHouse ();
        $warehouse -> name = 'centro';
        $warehouse ->save();


        $warehouse = new WereHouse ();
        $warehouse -> name = 'prymari';
        $warehouse ->save();

        $warehouse = new WereHouse ();
        $warehouse -> name = 'centro industrial';
        $warehouse ->save();

        $warehouse = new WereHouse ();
        $warehouse -> name = 'UTP';
        $warehouse ->save();

        $warehouse = new WereHouse ();
        $warehouse -> name = 'Por piesta';
        $warehouse ->save();


    }
}
