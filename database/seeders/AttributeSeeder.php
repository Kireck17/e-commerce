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
         //
         $attributes=new Attribute();
         $attributes->type="color";
         $attributes->save();
         //
        
         $attributes=new Attribute();
         $attributes->type="Tamaño";
         $attributes->save();
         //
         $attributes=new Attribute();
         $attributes->type="Pantalla";
         $attributes->save();
         //
         $attributes=new Attribute();
         $attributes->type="Camara";
         $attributes->save();
         //
         $attributes=new Attribute();
         $attributes->type="Talla";
         $attributes->save();
         //
         $attributes=new Attribute();
         $attributes->type="Material";
         $attributes->save();
         //
         $attributes=new Attribute();
         $attributes->type="Almacenamiento";
         $attributes->save();
    }
}
