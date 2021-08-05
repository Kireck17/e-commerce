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
            TrademarkSeeder::class, // FORMULARIO
            CategorySeeder::class, // FORMULARIO
            SubcategorySeeder::class, // FORMULARIO
            AttributeSeeder::class,
            AttributeValuesSeeder::class,
            OriginSeeder::class, // FORMULARIO
            WarehouseSeeder::class, // FORMULARIO
            ProductSeeder::class, // FORMULARIO
            VariationSeeder::class,
            ProviderSeeder::class, // FORMULARIO
            //KitSeeder::class,
            //KitDetailSeeder::class,
            ProviderSeeder::class,
            StockSeeder::class,
            FileSeeder::class,
            RolesandPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
