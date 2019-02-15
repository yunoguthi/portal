<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adm_Orgaos', function (Blueprint $table) {
            $table->increments('Ide_Orgao');
            $table->char('Nom_Orgao', 100)->nullable();
            $table->char('Num_Ug', 6)->nullable();
            $table->char('Num_Gestao', 4)->nullable();
            $table->char('Num_Cnpj', 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adm_Orgaos');
    }
}
