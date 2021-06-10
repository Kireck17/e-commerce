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
        $kitdetail ->quantity = 10;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 2;
        $kitdetail ->variation_id = 2;
        $kitdetail ->quantity = 40;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 3;
        $kitdetail ->variation_id = 3;
        $kitdetail ->quantity = 300;
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
        $kitdetail ->kit_id = 6;
        $kitdetail ->variation_id = 6;
        $kitdetail ->quantity = 42;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 7;
        $kitdetail ->variation_id = 7;
        $kitdetail ->quantity = 20;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 8;
        $kitdetail ->variation_id = 8;
        $kitdetail ->quantity = 30;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 9;
        $kitdetail ->variation_id = 9;
        $kitdetail ->quantity = 16;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 10;
        $kitdetail ->variation_id = 10;
        $kitdetail ->quantity = 42;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 11;
        $kitdetail ->variation_id = 11;
        $kitdetail ->quantity = 100;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 12;
        $kitdetail ->variation_id = 12;
        $kitdetail ->quantity = 9;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 13;
        $kitdetail ->variation_id = 13;
        $kitdetail ->quantity = 34;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 14;
        $kitdetail ->variation_id = 14;
        $kitdetail ->quantity = 5;
        $kitdetail ->save();

        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 15;
        $kitdetail ->variation_id = 15;
        $kitdetail ->quantity = 76;
        $kitdetail ->save();

    }
}
