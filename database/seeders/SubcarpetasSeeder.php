<?php

namespace Database\Seeders;

use App\Models\subcarpetas;
use Illuminate\Database\Seeder;

class SubcarpetasSeeder extends Seeder
{
  
    public function run()
    {
        subcarpetas::truncate();
        for ($i=1; $i <=4 ; $i++) { 
            subcarpetas::create([
                'carpeta_id' => 1,
                'id_at' => $i,
                'id_ef' => $i
            ]);
           }



        /*    for ($i=1; $i <=5 ; $i++) { 
            subcarpetas::create([
                'carpeta_id' => $i,
                'id_at' => $i,
                'id_ef' => $i
            ]);
           } */
    }
}
