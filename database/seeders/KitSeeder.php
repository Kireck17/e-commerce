<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class kitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        //
    {
        $kits=new Kit();
         
        $kits->save();
        //
        $kits=new Kit();
        
        $kits->save();
        //
        $kits=new Kit();
       
        $kits->save();
        //
        $kits=new Kit();
        
        $kits->save();
        //
        $kits=new Kit();
        
        $kits->save();
    }
}
