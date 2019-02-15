<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackVotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fd_Voto', function (Blueprint $table) {
            $table->increments('Ide_Voto');
            $table->bigInteger('Ide_Feedba');
            $table->foreign('Ide_Feedba')->references('Ide_Feedba')->on('Fd_Feedback');
            $table->bigInteger('Ide_Usuari');
            $table->foreign('Ide_Usuari')->references('id')->on('users');
            $table->integer('Tip_Tipo');
            $table->dateTime('Dat_data', 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fd_Voto');
    }
}
