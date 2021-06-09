<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Variation;

use Illuminate\Database\Seeder;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $product_variation=new Variation();
         $product_variation->save();
         $product_variation->Product()->attach(1);
         $product_variation->Variation()->attach(1);
        
         //
         $product_variation=new Variation();
         $product_variation->save();
         $product_variation->Product()->attach(2);
         $product_variation->Variation()->attach(2);
         
        
         //
    }
}
