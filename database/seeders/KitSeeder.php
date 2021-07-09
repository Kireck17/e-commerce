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
        for ($i=0; $i < 26; $i++) {
            $kits=new Kit();
            $kits->save();
        }
    }
}
