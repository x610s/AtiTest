<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            PlanSeeder::class,
            UserPlanSeeder::class,
            CarpetaSeeder::class
        ]);
    }
}
