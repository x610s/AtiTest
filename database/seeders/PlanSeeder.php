<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
  
    public function run()
    {
        Plan::truncate();
        for ($i=1; $i <=3 ; $i++) { 
            Plan::create([
                'name' => 'Plan '.$i,
                'description' => Str::random(20),
                'price' =>  ($i*1000)
            ]);
        }
    }
}
