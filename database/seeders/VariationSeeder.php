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
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(11);

         //2
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(1);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);

         //2
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(2);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //3
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(3);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(11);
         //4
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(4);
         $variations->attribute_value()->attach(15);
         $variations->attribute_value()->attach(2);
         //5
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(5);
         $variations->attribute_value()->attach(5);
         //6
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //7
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //8
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
         //9
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(6);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
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
         $variations->attribute_value()->attach(10);
         //12
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(7);
         $variations->attribute_value()->attach(5);
         $variations->attribute_value()->attach(11);
         //13
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(8);
         $variations->attribute_value()->attach(13);
         //14
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(9);
         $variations->attribute_value()->attach(14);
         //15
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //16
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //17
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
         //18
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(10);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
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
         $variations->product()->attach(11);
         $variations->attribute_value()->attach(3);
         $variations->attribute_value()->attach(11);
         //22
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(12);
         $variations->attribute_value()->attach(12);
         //23
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(13);
         $variations->attribute_value()->attach(14);
         $variations->attribute_value()->attach(5);
         //24
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(14);
         $variations->attribute_value()->attach(14);
         //25
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(15);
         $variations->attribute_value()->attach(6);
         $variations->attribute_value()->attach(7);
         $variations->attribute_value()->attach(16);
//
         //26 chica vino
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(10);
         //27 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(8);
         //28 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(23);
         $variations->attribute_value()->attach(9);

         //29 chica rosa frances
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(10);
         //30 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(8);
         //31 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(24);
         $variations->attribute_value()->attach(9);

         //32 chica negro
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //33 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //34 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(16);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);
//        

         //35 chica negro playera
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(10);
         //36 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(8);
         //37 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(1);
         $variations->attribute_value()->attach(9);

         //38 chica negro
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(10);
         //39 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(8);
         //40 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(17);
         $variations->attribute_value()->attach(2);
         $variations->attribute_value()->attach(9);
//
        //41 chica negro leggins
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(10);
        //42 medina
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(8);
        //43 grande
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(18);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(9);

         //44 chica negro playera
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(10);
         //45 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(8);
         //46 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(18);
         $variations->attribute_value()->attach(25);
         $variations->attribute_value()->attach(9);
//
        //47 chica negro playera flores
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(10);
        //48 medina
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(8);
        //49 grande
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(19);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(9);
//
         //50 chica sudadera colores
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(10);
         //51 medina
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(8);
         //52 grande
         $variations=new Variation();
         $variations->save();
         $variations->product()->attach(20);
         $variations->attribute_value()->attach(26);
         $variations->attribute_value()->attach(9);
//
        //53  pantufla vino 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(17);
        //54 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(19);
        //55 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(23);
        $variations->attribute_value()->attach(21);

        //56  pantufla rosa
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(18);
        //57 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(20);
        //58
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(21);
        $variations->attribute_value()->attach(25);
        $variations->attribute_value()->attach(22);
//
        //59  paans gris
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(10);
        //60 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(8);
        //61
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(22);
        $variations->attribute_value()->attach(27);
        $variations->attribute_value()->attach(9);
//
        
        //62  pantalon verde militar
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(10);
        //63 
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(8);
        //64
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(23);
        $variations->attribute_value()->attach(28);
        $variations->attribute_value()->attach(9);
//
//seccion de variaciones de hombres
        //65 playera chica blanca
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(10);

        //66
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(8);

        //67
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(24);
        $variations->attribute_value()->attach(2);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(9);
//
        //68 playera chica negra
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(10);

        //69
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(8);

        //70
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(25);
        $variations->attribute_value()->attach(1);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(9);
//
        //71 playera chica azul
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(10);

        //72
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(8);

        //73
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(26);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(32);
        $variations->attribute_value()->attach(9);
//
        //74 pantalon
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(34);
        $variations->attribute_value()->attach(39);

        //75
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(35);
        $variations->attribute_value()->attach(39);

        //76
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(36);
        $variations->attribute_value()->attach(39);

        //77
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(37);
        $variations->attribute_value()->attach(39);

        //78
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(27);
        $variations->attribute_value()->attach(29);
        $variations->attribute_value()->attach(33);
        $variations->attribute_value()->attach(38);
        $variations->attribute_value()->attach(39);
//
        //79 pantalon
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(34);
        $variations->attribute_value()->attach(40);

        //80
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(35);
        $variations->attribute_value()->attach(40);

        //81
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(36);
        $variations->attribute_value()->attach(40);

        //82
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(37);
        $variations->attribute_value()->attach(40);

        //83
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(28);
        $variations->attribute_value()->attach(30);
        $variations->attribute_value()->attach(31);
        $variations->attribute_value()->attach(38);
        $variations->attribute_value()->attach(40);
//variaciones autos 
        //84
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(29);
        $variations->attribute_value()->attach(41);
        $variations->attribute_value()->attach(42);

        //85
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(30);
        $variations->attribute_value()->attach(43);
        
        //86
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(31);
        $variations->attribute_value()->attach(44);

        //87
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(32);
        $variations->attribute_value()->attach(45);

        //88
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(32);
        $variations->attribute_value()->attach(46);

        //89
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(33);
        $variations->attribute_value()->attach(47);
        //90
        $variations=new Variation();
        $variations->save();
        $variations->product()->attach(33);
        $variations->attribute_value()->attach(48);


        


    }
}
