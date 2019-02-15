<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adm_Sistemas', function (Blueprint $table) {
            $table->increments('Ide_Sistem');
            $table->char('Nom_Nome', 255);
            $table->text('Img_Icone')->nullable();
            $table->char('Des_Nivel', 100)->nullable();
            $table->char('Txt_Direto', 255)->nullable();
            $table->integer('Cod_Acesso')->nullable();
            $table->char('Des_Descri', 255)->nullable();
            $table->tinyInteger('Sin_Libera')->nullable();
            $table->tinyInteger('Sin_Docume')->nullable();
            $table->bigInteger('Val_Contad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adm_Sistemas');
    }
}
