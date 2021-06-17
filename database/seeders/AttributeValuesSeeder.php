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
         //
         //17
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="22";
         $attribute_values->save();
         //18
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="23";
         $attribute_values->save();
         //19
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="24";
         $attribute_values->save();
         //20
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="25";
         $attribute_values->save();
         //21
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="27";
         $attribute_values->save();
         //22
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="5";
         $attribute_values->value="28";
         $attribute_values->save();
         //
         //23
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Vino";
         $attribute_values->save();
         //24
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Rosa Frances";
         $attribute_values->save();
         //NEGRO SE REPITE Y TIENE EL ID 1

         //25
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Rosa";
         $attribute_values->save();

         //26
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Mezcla de varios colores";
         $attribute_values->save();

         //27
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Gris";
         $attribute_values->save();

         //28
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Verde Militar";
         $attribute_values->save();

         //seccion hombres 
         //29
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Azul Marino";
         $attribute_values->save();

         //30
         $attribute_values=new AttributeValue();
         $attribute_values->attribute_id="1";
         $attribute_values->value="Café Obscuro";
         $attribute_values->save();

        //31
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="6";
        $attribute_values->value="Algodón";
        $attribute_values->save();
         
        //32
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="6";
        $attribute_values->value="Poliester";
        $attribute_values->save();

        //33
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="6";
        $attribute_values->value="Mezclilla";
        $attribute_values->save();

        //34
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="5";
        $attribute_values->value="30";
        $attribute_values->save();

        //35
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="5";
        $attribute_values->value="32";
        $attribute_values->save();

        //36
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="5";
        $attribute_values->value="33";
        $attribute_values->save();

        //37
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="5";
        $attribute_values->value="34";
        $attribute_values->save();

        //38
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="5";
        $attribute_values->value="36";
        $attribute_values->save();

        //39
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="8";
        $attribute_values->value="Slim";
        $attribute_values->save();

        //40
        $attribute_values=new AttributeValue();
        $attribute_values->attribute_id="8";
        $attribute_values->value="Skinny";
        $attribute_values->save();

    }
}
