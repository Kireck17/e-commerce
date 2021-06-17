<?php
namespace Database\Seeders;



use Illuminate\Database\Seeder;
use App\Models\Attribute;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //1
         $attributes=new Attribute();
         $attributes->type="Color";
         $attributes->save();
         //2
         $attributes=new Attribute();
         $attributes->type="Tamaño";
         $attributes->save();
         //3
         $attributes=new Attribute();
         $attributes->type="Pantalla";
         $attributes->save();
         //4
         $attributes=new Attribute();
         $attributes->type="Camara";
         $attributes->save();
         //5
         $attributes=new Attribute();
         $attributes->type="Talla";
         $attributes->save();
         //6
         $attributes=new Attribute();
         $attributes->type="Material";
         $attributes->save();
         //7
         $attributes=new Attribute();
         $attributes->type="Almacenamiento";
         $attributes->save();
         //8
         $attributes=new Attribute();
         $attributes->type="Corte";
         $attributes->save();
         //9
         $attributes=new Attribute();
         $attributes->type="Modelo";
         $attributes->save();
         //10
         $attributes=new Attribute();
         $attributes->type="Idioma";
         $attributes->save();
         //11
         $attributes=new Attribute();
         $attributes->type="Compatible";
         $attributes->save();

         //12
         $attributes=new Attribute();
         $attributes->type="Volumen de la unidad";
         $attributes->save();

         //13
         $attributes=new Attribute();
         $attributes->type="Logo";
         $attributes->save();
         //14
         $attributes=new Attribute();
         $attributes->type="Modelo";
         $attributes->save();
    }
}
