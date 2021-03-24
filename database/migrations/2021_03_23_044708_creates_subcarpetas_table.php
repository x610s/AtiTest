<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesSubcarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcarpetas', function (Blueprint $table) {
            $table->id();
            $table->integer('carpeta_id');
            $table->string('name')->default("Carpeta [".Carbon::now()->day."/".Carbon::now()->month."/".Carbon::now()->year."]");
            $table->integer('id_at')->nullable();
            $table->integer('id_ef')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcarpetas');
    }
}
