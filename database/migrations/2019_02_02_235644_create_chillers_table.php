<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChillersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Chillers', function (Blueprint $table) {
            $table->increments('Ide_Chillers');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Des_Identi', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Des_Tr_Marca', 50);
            $table->char('Des_Tr_Modelo', 50);
            $table->integer('Qtd_Tr');
            $table->integer('Val_Tr_Potenc');
            $table->char('Nom_Mbag_Marca', 50);
            $table->char('Nom_Mbag_Modelo', 50);
            $table->integer('Val_Mbag_Potenc');
            $table->integer('Val_Mbag_Tensao');
            $table->char('Nom_Mbac_Marca', 50);
            $table->char('Nom_Mbac_Modelo', 50);
            $table->integer('Val_Mbac_Potencia');
            $table->integer('Val_Mbac_Tensao');
            $table->integer('Sin_Ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Chillers');
    }
}
