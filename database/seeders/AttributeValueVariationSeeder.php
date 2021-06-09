<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute_value;
use App\Models\Variation;

class AttributeValueVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $attribute_value_variations=new Variation();
         $attribute_value_variations->save();
         $attribute_value_variations->Attribute_value()->attach(1);
         $attribute_value_variations->Variation()->attach(1);
        
         //
         $attribute_value_variations=new Variation();
         $attribute_value_variations->save();
         $attribute_value_variations->Attribute_value()->attach(2);
         $attribute_value_variations->Variation()->attach(2);
    }
}
