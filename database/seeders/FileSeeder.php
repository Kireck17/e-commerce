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
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://irp-cdn.multiscreensite.com/ad618081/MOBILE/images/1d2e76bf-3427-4efb-b3d9-287427c3577b.jpg?1447848839118&v=7.3.45002";
        $file -> save();
        
        $file = new File();
        $file-> fileable_id = 2;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://www.viajes-carrefour.com/blog/wp-content/uploads/2017/09/pokemoncenter.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 3;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://tecnicos24-7.com/wp-content/uploads/2019/10/banner-3-1.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 4;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://i1.wp.com/www.fixealo.com/wp-content/uploads/2019/06/BANNER-PAGINA.jpg?ssl=1";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 5;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://www.gamestop.es/wp-content/uploads/2018/03/diferencias-entre-un-PC-Gamer-y-un-PC-normal.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 6;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://image.freepik.com/foto-gratis/sorprendente-mujer-adicta-compras-vestida-elegante-vestido-sostiene-bolsas-dos-manos-olvida-comprar-algo-sorprende-al-ver-grandes-descuentos-tienda-aislada-pared-rosa_176532-9113.jpg";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 7;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://lh3.googleusercontent.com/proxy/y1OeBMmhGiNPRzofgk_vHiHjjBfGFHodB91kRBDCVLhvAheOnyALoeWbWoF5EmuHPhF45WPMdqgFN5SWKMUsUTi2osPMt9hXLch-tNeOGAsiUUIU7sZMLSU8_kxx4DQ4Wl0wYIr8J7AupfspGNU";
        $file -> save();

        $file = new File();
        $file-> fileable_id = 8;
        $file-> fileable_type="App\Models\Category";
        $file -> url = "https://irp-cdn.multiscreensite.com/ad618081/MOBILE/images/1d2e76bf-3427-4efb-b3d9-287427c3577b.jpg?1447848839118&v=7.3.45002";
        $file -> save();



        
    }
}
