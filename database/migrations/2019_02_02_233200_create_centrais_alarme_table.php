<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentraisAlarmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Centrais_Alarme', function (Blueprint $table) {
            $table->increments('Ide_Centra_Alarme');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Des_Identi', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->tinyInteger('Ind_Garant');
            $table->integer('Qtd_Detect');
            $table->integer('Qtd_Aciona');
            $table->integer('Qtd_Sirene');
            $table->integer('Qtd_Botoei');
            $table->integer('Qtd_Eletro');
            $table->integer('Qtd_Bateri');
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
        Schema::dropIfExists('Pd_Centrais_Alarme');
    }
}
