<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFancoilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Fancoils', function (Blueprint $table) {
            $table->increments('Ide_Fancoi');
            $table->integer('Ide_Chillers');
            $table->foreign('Ide_Chillers')->references('Ide_Chillers')->on('Pd_Chillers');
            $table->char('Des_Identi', 50);
            $table->integer('Qtd_Capaci');
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
        Schema::dropIfExists('Pd_Fancoils');
    }
}
