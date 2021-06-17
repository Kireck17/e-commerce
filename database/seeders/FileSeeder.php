<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new File();
        $file-> fileable_id = 1;
        $file-> fileable_type="App\Models\Product";
        $file -> url = "https://www.lancetalent.com/blog/wp-content/uploads/Disen%CC%83o-sin-ti%CC%81tulo-26-1.png";
        $file -> save();
        
        $file = new File();
        $file-> fileable_id = 2;
        $file-> fileable_type="App\Models\Product";
        $file -> url = "https://tallerdeltotebag.es/wp-content/uploads/2019/10/que-son-las-ofertas-flash.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 3;
        $file-> fileable_type="App\Models\Product";
        $file -> url = "https://tallerdeltotebag.es/wp-content/uploads/2019/10/que-son-las-ofertas-flash.jpg";
        $file -> save();
    }
}
