<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TrademarkSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            AttributeSeeder::class,
            AttributeValuesSeeder::class,
            //KitSeeder::class,
            OriginSeeder::class,
            WarehouseSeeder::class,
            ProductSeeder::class,
            VariationSeeder::class,
            //KitDetailSeeder::class,
            ProviderSeeder::class,
            StockSeeder::class,
            FileSeeder::class,
        ]);
    }
}
