<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Lampadas', function (Blueprint $table) {
            $table->increments('Ide_Lampad');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->integer('Qtd_Lampad');
            $table->char('Des_Tipo_Lampad', 50);
            $table->integer('Val_Tensao');
            $table->integer('Val_Potenc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Lampadas');
    }
}
