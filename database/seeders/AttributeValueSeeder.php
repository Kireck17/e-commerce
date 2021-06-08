<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute_Value;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atributeValue = new Attribute_Value ();
        $atributeValue->attribute_id = 1;
        $atributeValue->value = 'Color negro';
        $atributeValue->save();

        $atributeValue = new Attribute_Value ();
        $atributeValue->attribute_id = 2;
        $atributeValue->value = 'Color Azul';
        $atributeValue->save();

        $atributeValue = new Attribute_Value ();
        $atributeValue->attribute_id = 3;
        $atributeValue->value = 'Tamaño XL';
        $atributeValue->save();
        
        $atributeValue = new Attribute_Value ();
        $atributeValue->attribute_id = 4;
        $atributeValue->value = 'Tamaño XLL';
        $atributeValue->save();

        $atributeValue = new Attribute_Value ();
        $atributeValue->attribute_id = 5;
        $atributeValue->value = 'Capacidad 500GB';
        $atributeValue->save();
    }
}
