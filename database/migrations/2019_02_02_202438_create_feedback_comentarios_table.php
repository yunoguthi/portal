<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fd_Comentarios', function (Blueprint $table) {
            $table->increments('Ide_Coment');
            $table->bigInteger('Ide_Feedba');
            $table->foreign('Ide_Feedba')->references('Ide_Feedba')->on('Fd_Feedback');
            $table->bigInteger('Ide_Usuari');
            $table->foreign('Ide_Usuari')->references('id')->on('users');
            $table->char('Txt_Comment', 500);
            $table->integer('Qtd_Likes')->nullable();
            $table->integer('Qtd_Dislik')->nullable();
            $table->tinyInteger('Sin_Exclui')->nullable();
            $table->date('Dat_Data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fd_Comentarios');
    }
}
