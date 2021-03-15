<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans_user')->truncate();
        for ($i=1; $i <=5 ; $i++) { 
            $user = User::find($i);
            $user->planes()->attach(1);
        }

    }
}
