<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Dvrs', function (Blueprint $table) {
            $table->increments('Ide_Dvrs');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->char('Num_Serie', 50);
            $table->char('Des_Patrim', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->integer('Qtd_Capaci_Hd');
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
        Schema::dropIfExists('Pd_Dvrs');
    }
}
