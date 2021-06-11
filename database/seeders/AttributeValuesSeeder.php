<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute_value;

class AttributeValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //
         $attribute_values=new Attribute_value();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Rojo";
         $attribute_values->save();
         //
        
         $attribute_values=new Attribute_value();
         $attribute_values->attribute_id="2";
         $attribute_values->value="AMOLED";
         $attribute_values->save();
         //
         $attribute_values=new Attribute_value();
         $attribute_values->attribute_id="3";
         $attribute_values->value="128GB";
         $attribute_values->save();
         //
         $attribute_values=new Attribute_value();
         $attribute_values->attribute_id="4";
         $attribute_values->value="25 X 15";
         $attribute_values->save();
    }
}
