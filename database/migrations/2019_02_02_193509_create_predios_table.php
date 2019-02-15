<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('Pd_Predios');

        Schema::create('Pd_Predios', function (Blueprint $table) {
            $table->increments('Ide_Predio');
            $table->unsignedInteger('Ide_Munici');
            $table->foreign('Ide_Munici')->references('Ide_Munici')->on('Adm_Municipios');
            $table->char('Des_Predio', 100);
            $table->char('Des_Endere', 100);
            $table->integer('Num_Predio');
            $table->char('Des_Compleme', 50);
            $table->char('Nom_Bairro', 50);
            $table->char('Num_Cep', 8);
            $table->tinyInteger('Sin_Situac');
            $table->text('Img_Fachad');
            $table->integer('Qtd_Pavime');
            $table->integer('Qtd_Ac_Pessoa');
            $table->integer('Qtd_Ac_Aut_Veicul');
            $table->integer('Qtd_Ac_Man_Veicul');
            $table->integer('Qtd_Copas');
            $table->integer('Qtd_Ac_Contro');
            $table->float('Val_Perime', 8 , 2);
            $table->integer('Num_Vagas_Cobert');
            $table->integer('Num_Vagas_Nao_Cobert');
            $table->integer('Num_Vagas_Idosos');
            $table->integer('Num_Vagas_Pessoas_Defici');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Predios');
    }
}
