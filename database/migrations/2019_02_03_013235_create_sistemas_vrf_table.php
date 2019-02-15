<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasVrfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Sistemas_Vrf', function (Blueprint $table) {
            $table->increments('Ide_Sistem_Vrf');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Des_Identi', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->integer('Val_Capaci');
            $table->tinyInteger('Sin_Ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Sistemas_Vrf');
    }
}
