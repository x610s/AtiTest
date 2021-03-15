<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();
        for ($i=1; $i <=5 ; $i++) { 
            $user = User::findOrFail($i);
            $role = $i%2==0? 1:2;
            $user->roles()->attach($role);
         }
    }
}
