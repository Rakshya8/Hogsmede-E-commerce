<?php

namespace Database\Seeders;
use App\Model\Product;
use App\Models\CDProduct;

use Illuminate\Database\Seeder;

class CDProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Create fake data for table product
         CDProduct::factory()->times(10)->create();
    }
}
