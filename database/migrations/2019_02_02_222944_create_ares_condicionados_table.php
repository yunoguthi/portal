<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAresCondicionadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Ares_Condicionados', function (Blueprint $table) {
            $table->increments('Ide_Pd_Ares_Condic');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Num_Serie', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->integer('Val_Capaci');
            $table->char('Des_Local_Instal', 50)->nullable();
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
        Schema::dropIfExists('Pd_Ares_Condicionados');
    }
}
