<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Elevadores', function (Blueprint $table) {
            $table->increments('Ide_Elevad');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Des_Identi', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Des_Sistem_Contro', 50);
            $table->integer('Qtd_Capaci_Pessoa');
            $table->integer('Qtd_Capaci_Peso');
            $table->float('Val_Veloci', 2, 2);
            $table->char('Des_Sistem_Portas', 50);
            $table->integer('Val_Tensao');
            $table->char('Des_Sistem_Acoman', 50);
            $table->integer('Num_Freque');
            $table->integer('Num_Parada');
            $table->integer('Val_Potenc_Mtraca');
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
        Schema::dropIfExists('Pd_Elevadores');
    }
}
