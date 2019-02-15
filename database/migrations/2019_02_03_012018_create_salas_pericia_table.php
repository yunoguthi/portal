<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasPericiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Salas_Pericia', function (Blueprint $table) {
            $table->increments('Ide_Salas_Perici');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->text('Img_Foto');
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
        Schema::dropIfExists('Pd_Salas_Pericia');
    }
}
