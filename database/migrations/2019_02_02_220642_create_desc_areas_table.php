<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Desc_Areas', function (Blueprint $table) {
            $table->increments('Ide_Desc_Areas');
            $table->integer('Ide_Tipos_Areas');
            $table->foreign('Ide_Tipos_Areas')->references('Ide_Tipos_Areas')->on('Pd_Tipos_Areas');
            $table->char('Des_Areas', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Desc_Areas');
    }
}
