<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasBombaIncendioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Sistemas_Bomba_Incendio', function (Blueprint $table) {
            $table->increments('Ide_Sistem_Bomba_Incend');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Des_Identi', 50);
            $table->integer('Val_Capaci');
            $table->integer('Val_Tensao');
            $table->char('Nom_Modelo', 50);
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
        Schema::dropIfExists('Pd_Sistemas_Bomba_Incendio');
    }
}
