<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fd_Feedback', function (Blueprint $table) {
            $table->bigIncrements('Ide_Feedba');
            $table->integer('Ide_Sistem');
            $table->foreign('Ide_Sistem')->references('Ide_Sistem')->on('Adm_Sistemas');
            $table->bigInteger('Ide_Usuari');
            $table->foreign('Ide_Usuari')->references('id')->on('users');
            $table->char('Nom_Titulo', 255);
            $table->char('Des_Descri', 1024);
            $table->tinyInteger('Tip_Tipo');
            $table->tinyInteger('Sin_Ativo');
            $table->char('Img_Screen_File', 50)->nullable();
            $table->text('Txt_Browser_Info')->nullable();
            $table->char('End_Url', 255)->nullable();
            $table->date('Dat_Data')->nullable();
            $table->bigInteger('Ide_Usuari_Admin')->nullable();
            $table->tinyInteger('Sin_Situac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fd_Feedback');
    }
}
