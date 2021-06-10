<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KitDetail;

class KitDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 1;
        $kitdetail ->variation_id = 1;
        $kitdetail ->quantity = 22;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 2;
        $kitdetail ->variation_id = 2;
        $kitdetail ->quantity = 40;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 3;
        $kitdetail ->variation_id = 3;
        $kitdetail ->quantity = 100;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 4;
        $kitdetail ->variation_id = 4;
        $kitdetail ->quantity = 50;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 5;
        $kitdetail ->variation_id = 5;
        $kitdetail ->quantity = 55;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 3;
        $kitdetail ->variation_id = 3;
        $kitdetail ->quantity = 42;
        $kitdetail ->save();

    }
}
