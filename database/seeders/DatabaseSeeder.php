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
        $this->call([ 
            RoleAndPermissionSeeder::class,
            UserSeeder::class,
            StoreSeeder::class,
            BrandSeeder::class,
            ProductLineSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
