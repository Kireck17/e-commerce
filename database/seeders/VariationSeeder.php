<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Variation;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         $variations=new Variation();
         
         $variations->save();
         //
         $variations=new Variation();
         
         $variations->save();
         //
         $variations=new Variation();
        
         $variations->save();
         //
         $variations=new Variation();
         
         $variations->save();
         //
         $variations=new Variation();
         
         $variations->save();
    }
}
