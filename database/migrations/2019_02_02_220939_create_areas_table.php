<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Areas', function (Blueprint $table) {
            $table->increments('Ide_Areas');
            $table->integer('Ide_Desc_Areas');
            $table->foreign('Ide_Desc_Areas')->references('Ide_Desc_Areas')->on('Pd_Desc_Areas');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->float('Val_Metrag', 8 , 2)->nullable();
            $table->date('Dat_Atuali', 8 , 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Areas');
    }
}
