<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adm_Municipios', function (Blueprint $table) {
            $table->increments('Ide_Munici');
            $table->unsignedInteger('Ide_Subsec');
            $table->foreign('Ide_Subsec')->references('Ide_Subsec')->on('Adm_Subsecoes');
            $table->integer('Cod_Ibge');
            $table->char('Nom_Munici', 255);
            $table->char('Nom_Uf', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adm_Municipios');
    }
}
