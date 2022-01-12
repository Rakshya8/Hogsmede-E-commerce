<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookProduct;
use App\Models\Product;

class BookProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Create fake data for table product
         BookProduct::factory()->times(5)->create();
    }
}
