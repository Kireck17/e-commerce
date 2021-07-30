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
         //1
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(1);
         $variations->attribute_value()->attach(1);//negro
         $variations->attribute_value()->attach(11);//plaastico

         //2
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(1);
         $variations->attribute_value()->attach(2);//blanco
         $variations->attribute_value()->attach(11);

         //3
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(2);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //4
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(3);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //5
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(4);
         $variations->attribute_value()->attach(15);
         $variations->attribute_value()->attach(2);
         //6
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(5);
         $variations->attribute_value()->attach(5);
         //7
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //8
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //9
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
         //10
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //11
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(8);
         //12
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(9);
         //13
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(7);
         $variations->attribute_value()->attach(5);
         $variations->attribute_value()->attach(11);
         //14
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(8);
         $variations->attribute_value()->attach(13);
         //15
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(9);
         $variations->attribute_value()->attach(14);
         //16
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //17
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //18
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
         //19
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //20
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //21
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //22
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(11);
         $variations->attribute_value()->attach(3);
         $variations->attribute_value()->attach(11);
         //23
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(12);
         $variations->attribute_value()->attach(12);
         //24
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(13);
         $variations->attribute_value()->attach(14);
         $variations->attribute_value()->attach(5);
         //25
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(14);
         $variations->attribute_value()->attach(14);
         //26
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(15);
         $variations->attribute_value()->attach(6);
         $variations->attribute_value()->attach(7);
         $variations->attribute_value()->attach(16);
//
         //27 chica vino
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(10);
         //28 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(8);
         //29 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(9);

         //30 chica rosa frances
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(10);
         //31 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(8);
         //32 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(9);

         //33 chica negro
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //34 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //35 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
//        

         //36 chica negro playera
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //37 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //38 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);

         //39 chica blanca
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //40 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(8);
         //41 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(9);
//
        //42 chica negro leggins
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(10);
        //43 medina
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(8);
        //44 grande
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(9);

         //45 chica rosa
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(10);
         //46 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(8);
         //47 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(9);
//
        //48 chica negro playera flores
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(10);
        //49 medina
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(8);
        //50 grande
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(9);
//
         //51 chica sudadera colores
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(10);
         //52 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(8);
         //53 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(9);
//
        //54  pantufla vino 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(17);
        //55 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(19);
        //56 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(21);

        //57  pantufla rosa
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(18);
        //58 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(20);
        //59
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(22);
//
        //60  paans gris
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(10);
        //61
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(8);
        //62
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(9);
//
        
        //63  pantalon verde militar
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(10);
        //64
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(8);
        //65
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(9);
//
//seccion de variaciones de hombres
        //66 playera chica blanca
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(10);

        //67
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(8);

        //68
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(9);
//
        //69 playera chica negra
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(10);

        //70
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(8);

        //71
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(9);
//
        //72 playera chica azul
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(10);

        //73
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(8);

        //74
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(9);
//
        //75 pantalon
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(34);
        $variations->attribute_value()->attach(39);

        //76
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(35);
        $variations->attribute_value()->attach(39);

        //77
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(36);
        $variations->attribute_value()->attach(39);

        //78
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(37);
        $variations->attribute_value()->attach(39);

        //79
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(38);
        $variations->attribute_value()->attach(39);
//
        //80 pantalon
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(34);
        $variations->attribute_value()->attach(40);

        //81
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(35);
        $variations->attribute_value()->attach(40);

        //82
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(36);
        $variations->attribute_value()->attach(40);

        //83
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(37);
        $variations->attribute_value()->attach(40);

        //84
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(38);
        $variations->attribute_value()->attach(40);
//variaciones autos 
        //85
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(29);
        $variations->attribute_value()->attach(41);
        $variations->attribute_value()->attach(42);

        //86
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(30);
        $variations->attribute_value()->attach(43);
        
        //87
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(31);
        $variations->attribute_value()->attach(44);

        //88
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(32);
        $variations->attribute_value()->attach(45);

        //89
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(32);
        $variations->attribute_value()->attach(46);

        //90
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(33);
        $variations->attribute_value()->attach(47);
        //91
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(33);
        $variations->attribute_value()->attach(48);


        


    }
}
