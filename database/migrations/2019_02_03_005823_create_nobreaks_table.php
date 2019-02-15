<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNobreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Nobreaks', function (Blueprint $table) {
            $table->increments('Ide_Nobrek');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Num_Serie', 50);
            $table->integer('Val_Capaci_Nobrek');
            $table->date('Dat_Instal');
            $table->date('Dat_Operac');
            $table->char('Nom_Bt_Marca', 50);
            $table->integer('Qtd_Bt');
            $table->integer('Val_Bt_Capaci');
            $table->date('Dat_Bt_Instal');
            $table->date('Dat_Bt_Previs');
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
        Schema::dropIfExists('Pd_Nobreaks');
    }
}
