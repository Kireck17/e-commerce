<?php

namespace Database\Seeders;

use App\Models\Trademark;
use Illuminate\Database\Seeder;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trademark=new Trademark();
        $trademark->name="Redmi";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="Samsung";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="Sony";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="Alcatel";
        $trademark->save();

        $trademark=new Trademark();
        $trademark->name="LG";
        $trademark->save();
    }
}
