<?php

namespace Database\Seeders;

use App\Models\ActualizacionTributaria;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ActualizacionTributariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActualizacionTributaria::truncate();
        for ($i=1; $i <=4; $i++) { 
            ActualizacionTributaria::create([
                'name' => 'Actualizacion Tributaria '. Carbon::now(),
                'descripcion' => Str::random(200),
            ]);
        }
    }
}
