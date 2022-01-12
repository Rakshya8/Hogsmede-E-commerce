<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GameProduct;
use App\Models\Product;

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

        //To run multiple seeder at once
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BookProductSeeder::class);
    }
}
