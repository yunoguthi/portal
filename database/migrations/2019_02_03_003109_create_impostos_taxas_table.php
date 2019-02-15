<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpostosTaxasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Impostos_Taxas', function (Blueprint $table) {
            $table->increments('Ide_Impost_Taxas');
            $table->integer('Ide_Predio');
            $table->foreign('Ide_Predio')->references('Ide_Predio')->on('Pd_Predios');
            $table->float('Val_Iptu', 8, 2);
            $table->float('Val_Taxa_Lixo', 8, 2);
            $table->float('Val_Taxa_Ilumin', 8, 2);
            $table->char('Txt_Observ', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Impostos_Taxas');
    }
}
