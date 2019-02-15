<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Plantas', function (Blueprint $table) {
            $table->increments('Ide_Planta');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->integer('Ide_Tipos_Planta');
            $table->foreign('Ide_Tipos_Planta')->references('Ide_Tipos_Planta')->on('Pd_Tipos_Plantas');
            $table->text('Img_Planta');
            $table->integer('Num_Andar');
            $table->char('Des_Situac', 50);
            $table->char('Txt_Observ', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Plantas');
    }
}
