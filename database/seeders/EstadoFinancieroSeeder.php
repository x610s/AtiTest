<?php

namespace Database\Seeders;

use App\Models\EstadoFinanciero;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class EstadoFinancieroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoFinanciero::truncate();
        for ($i=1; $i <=4; $i++) { 
            EstadoFinanciero::create([
                'name' => 'Estado Financiero '. Carbon::now(),
                'descripcion' => Str::random(200),
            ]);
        }
    }
}
