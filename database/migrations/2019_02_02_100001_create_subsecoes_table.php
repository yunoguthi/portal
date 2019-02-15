<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsecoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('Adm_Subsecoes');
        Schema::create('Adm_Subsecoes', function (Blueprint $table) {
            $table->increments('Ide_Subsec');
            $table->unsignedInteger('Ide_Orgao');
            $table->foreign('Ide_Orgao')->references('Ide_Orgao')->on('Adm_Orgaos');
            $table->char('Nom_Subsec', 100)->nullable();
            $table->tinyInteger('Des_Polo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adm_Subsecoes');
    }
}
