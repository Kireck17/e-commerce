<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AttributeValue;

class AttributeValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //1
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Negro";
         $attribute_values->save();
         //2
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Blanco";
         $attribute_values->save();
         //3
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="2";
         $attribute_values->value="39 cm";
         $attribute_values->save();
         //4
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="2";
         $attribute_values->value="1 metro x 60cm";
         $attribute_values->save();
         //5
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="2";
         $attribute_values->value="chico";
         $attribute_values->save();
         //6
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="3";
         $attribute_values->value="40 cm x 6cm";
         $attribute_values->save();
         //7
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="4";
         $attribute_values->value="12MGP x 8MGP";
         $attribute_values->save();
         //8
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="Mediana";
         $attribute_values->save();
         //9
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="Grande";
         $attribute_values->save();
         //10
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="Chica";
         $attribute_values->save();
         //11
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="6";
         $attribute_values->value="Plastico";
         $attribute_values->save();
         //12
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="6";
         $attribute_values->value="Papel";
         $attribute_values->save();
         //13
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="6";
         $attribute_values->value="Tela";
         $attribute_values->save();
         //14
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="6";
         $attribute_values->value="Fierro/Acero/Metalico";
         $attribute_values->save();
         //15
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="6";
         $attribute_values->value="Caucho";
         $attribute_values->save();
         //16
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="7";
         $attribute_values->value="128GB";
         $attribute_values->save();
         
    }
}
