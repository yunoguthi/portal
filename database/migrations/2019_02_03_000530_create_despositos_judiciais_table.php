<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespositosJudiciaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Depositos_Judiciais', function (Blueprint $table) {
            $table->increments('Ide_Deposi_Judici');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->text('Img_Foto');
            $table->float('Val_Area', 8, 2);
            $table->char('Des_Condic', 50);
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
        Schema::dropIfExists('Pd_Depositos_Judiciais');
    }
}
