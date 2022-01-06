<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //call to the models to get all data
        $roles=Role::all();
        User::all()->each(function ($user) use ($roles){
            //attach user to a role
            $user->roles()->attach(
                //get one random role id
                $roles->random(1)->pluck('id')
            );
        });
    }
}
