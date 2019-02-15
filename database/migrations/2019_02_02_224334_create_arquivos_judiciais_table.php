<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArquivosJudiciaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Arquivos_Judiciais', function (Blueprint $table) {
            $table->increments('Ide_Arquiv_Judici');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->float('Val_Area', 8,2);
            $table->char('Des_Condic', 50);
            $table->char('Txt_Observ', 150);
            $table->char('Txt_Arquiv_Foto', 50)->nullable();
            $table->char('Txt_Nome_Arquiv', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Arquivos_Judiciais');
    }
}
