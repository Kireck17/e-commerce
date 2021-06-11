<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Origin;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $origin = new Origin();
        $origin -> country= 'Mexico';
        $origin -> save();

        $origin = new Origin();
        $origin -> country= 'Japon';
        $origin -> save();

        $origin = new Origin();
        $origin -> country= 'USA';
        $origin -> save();

        $origin = new Origin();
        $origin -> country= 'Inglaterra';
        $origin -> save();

        $origin = new Origin();
        $origin -> country= 'España';
        $origin -> save();
    }
}
