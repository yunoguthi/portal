<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentraisTelefonicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Centrais_Telefonicas', function (Blueprint $table) {
            $table->increments('Ide_Centrais_Telefonicas');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Num_Serie', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Num_Ip', 50);
            $table->integer('Qtd_Ramais_A');
            $table->integer('Qtd_Ramais_I');
            $table->integer('Qtd_Vf');
            $table->integer('Tipo_Recep');
            $table->integer('Qtd_Sip');
            $table->integer('Qtd_Tronco');
            $table->integer('Qtd_E1');
            $table->date('Dat_Operac');
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
        Schema::dropIfExists('Pd_Centrais_Telefonicas');
    }
}
