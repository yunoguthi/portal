<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogErrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adm_Log_Erros', function (Blueprint $table) {
            $table->increments('Ide_Log');
            $table->bigInteger('Ide_Usuari');
            $table->foreign('Ide_Usuari')->references('id')->on('users');
            $table->text('Txt_Descri')->nullable();
            $table->char('Txt_Url', 512)->nullable();
            $table->char('Txt_Metodo', 30)->nullable();
            $table->char('Txt_Ip', 15)->nullable();
            $table->char('Txt_Agente', 512)->nullable();
            $table->char('Tip_Log', 1)->nullable();
            $table->date('Dat_Data')->nullable();
            $table->smallInteger('Sin_Fixado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adm_Log_Erros');
    }
}
