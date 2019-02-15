<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinasReprograficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Maquinas_Reprograficas', function (Blueprint $table) {
            $table->increments('Ide_Maquin_Reprog');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Num_Serie', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Des_Tipo', 50);
            $table->char('Des_Local_Instal', 50);
            $table->tinyInteger('Sin_Ativo');
            $table->tinyInteger('Num_Cor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Maquinas_Reprograficas');
    }
}
