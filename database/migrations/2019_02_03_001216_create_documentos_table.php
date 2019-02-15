<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Documentos', function (Blueprint $table) {
            $table->increments('Ide_Docume');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->integer('Ide_Tipos_Docume');
            $table->foreign('Ide_Tipos_Docume')->references('Ide_Tipos_Docume')->on('Pd_Tipos_Documentos');
            $table->text('Img_Docume');
            $table->date('Dat_Vencim');
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
        Schema::dropIfExists('Pd_Documentos');
    }
}
