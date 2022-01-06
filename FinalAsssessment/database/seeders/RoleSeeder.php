<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crete seeder for role with hard quoted roles
        DB::table('roles')->insert([
            'name'=>'Trader'
        ]);

        DB::table('roles')->insert([
            'name'=>'Admin'
        ]);

        DB::table('roles')->insert([
            'name'=>'User'
        ]);


    }
}
