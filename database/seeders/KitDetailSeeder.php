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
        // Ropa deportiva dama chica
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 303;
        $kitdetail ->variation_id = 42;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 303;
        $kitdetail ->variation_id = 45;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 303;
        $kitdetail ->variation_id = 36;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        // Ropa deportiva dama mediana
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 304;
        $kitdetail ->variation_id = 43;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 304;
        $kitdetail ->variation_id = 46;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 304;
        $kitdetail ->variation_id = 37;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        // Ropa deportiva dama grande
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 305;
        $kitdetail ->variation_id = 44;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 305;
        $kitdetail ->variation_id = 47;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 305;
        $kitdetail ->variation_id = 38;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();

        // Moda europea chica
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 306;
        $kitdetail ->variation_id = 62;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 306;
        $kitdetail ->variation_id = 27;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 306;
        $kitdetail ->variation_id = 30;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 306;
        $kitdetail ->variation_id = 33;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        // Moda europea mediana
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 307;
        $kitdetail ->variation_id = 63;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 307;
        $kitdetail ->variation_id = 28;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 307;
        $kitdetail ->variation_id = 31;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 307;
        $kitdetail ->variation_id = 34;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        // Moda europea grande
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 308;
        $kitdetail ->variation_id = 64;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 308;
        $kitdetail ->variation_id = 29;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 308;
        $kitdetail ->variation_id = 32;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
        $kitdetail = new KitDetail();
        $kitdetail ->kit_id = 308;
        $kitdetail ->variation_id = 35;
        $kitdetail ->quantity = 1;
        $kitdetail ->save();
    }
}
