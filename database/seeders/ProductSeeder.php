<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product -> barcode = 34890135;
        $product -> name = 'Memoria RAM DDR4';
        $product -> category_id = 1;
        $product -> subcategory_id = 1;
        $product -> trademark_id = 1;
        $product -> description = "Normally, both your asses would be dead as fucking fried chicken, 
        but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, 
        I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already 
        been through too much shit this morning over this case to hand it over to your dumb ass.";
        $product -> save();

        $product = new Product();
        $product -> barcode = 64357289;
        $product -> name = 'Memoria RAM DDR3';
        $product -> category_id = 2;
        $product -> subcategory_id = 2;
        $product -> trademark_id = 2;
        $product -> description = "My money's in that office, right? If she start giving me some 
        bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the
        head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. 
        and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?";
        $product -> save();

        $product = new Product();
        $product -> barcode = 54120237;
        $product -> name = 'Moderboard Gigabyte A320';
        $product -> category_id = 3;
        $product -> subcategory_id = 3;
        $product -> trademark_id = 3;
        $product -> description = "Normally, both your asses would be dead as fucking fried chicken, 
        but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, 
        I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already 
        been through too much shit this morning over this case to hand it over to your dumb ass.";
        $product -> save();

        $product = new Product();
        $product -> barcode = 1523687;
        $product -> name = 'Memoria SSD';
        $product -> category_id = 4;
        $product -> subcategory_id = 4;
        $product -> trademark_id = 4;
        $product -> description = "Do you see any Teletubbies in here? Do you see a slender 
        plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a 
        blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well,
         that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.";
         $product -> save();

         $product = new Product();
        $product -> barcode = 47392304;
        $product -> name = 'Tarjeta de video RTX 1060 super';
        $product -> category_id = 5;
        $product -> subcategory_id = 5;
        $product -> trademark_id = 5;
        $product -> description = "Your bones don't break, mine do. That's clear. 
        Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear.
        But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke.
         We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve,
          just on opposite ends.";
        $product -> save();
    }
}
