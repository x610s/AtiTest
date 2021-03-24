<?php

namespace Database\Seeders;

use App\Models\Carpeta;
use Illuminate\Database\Seeder;

class CarpetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Carpeta::truncate();
       for ($i=1; $i <=5 ; $i++) { 
        Carpeta::create([
            'user_id' => $i
        ]);
       }
    }
}
