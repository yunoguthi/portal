<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoresGeradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Motores_Gerador', function (Blueprint $table) {
            $table->increments('Ide_Motor_Gerado');
            $table->integer('Ide_Gerado');
            $table->foreign('Ide_Gerado')->references('Ide_Gerado')->on('Pd_Geradores');
            $table->char('Nom_Marca', 50);
            $table->integer('Val_Potenc');
            $table->char('Des_Identi', 50);
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
        Schema::dropIfExists('Pd_Motores_Gerador');
    }
}
