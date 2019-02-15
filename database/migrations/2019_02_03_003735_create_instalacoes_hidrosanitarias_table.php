<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstalacoesHidrosanitariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Instalacoes_Hidrosanitarias', function (Blueprint $table) {
            $table->increments('Ide_Instal_Hidro_Sanita');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->integer('Qtd_Caixa_Dagua');
            $table->integer('Qtd_Banhei');
            $table->integer('Qtd_Vhydra');
            $table->integer('Qtd_Vacopl');
            $table->integer('Qtd_Tornei');
            $table->integer('Qtd_Duchas');
            $table->integer('Qtd_Lavato');
            $table->integer('Qtd_Mictor');
            $table->integer('Qtd_Sanita_Defici');
            $table->integer('Qtd_Boias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Instalacoes_Hidrosanitarias');
    }
}
