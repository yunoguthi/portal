<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamerasCftvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Cameras_Cftv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Ide_Dvrs');
            $table->foreign('Ide_Dvrs')->references('Ide_Dvrs')->on('Pd_Dvrs');
            $table->char('Num_Serie', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->char('Des_Tecnol', 50);
            $table->char('Tip_Resolu', 50);
            $table->char('Tip_Fonte', 50);
            $table->char('Tip_Balun', 50);
            $table->char('Tip_Cabeam', 50);
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
        Schema::dropIfExists('Pd_Cameras_Cftv');
    }
}
