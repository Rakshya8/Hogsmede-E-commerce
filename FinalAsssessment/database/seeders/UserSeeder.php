<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * For table User
     * @return void
     */
    public function run()
    {
        //Create fake data for table user
        User::factory()->times(10)->create();

    }
}
