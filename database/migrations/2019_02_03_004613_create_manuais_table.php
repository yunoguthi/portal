<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pd_Manuais', function (Blueprint $table) {
            $table->increments('Ide_Manuai');
            $table->char('Des_Equipa', 50);
            $table->char('Nom_Marca', 50);
            $table->char('Nom_Modelo', 50);
            $table->text('Img_Manua');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pd_Manuais');
    }
}
