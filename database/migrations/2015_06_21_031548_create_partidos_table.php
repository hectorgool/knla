<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned();
            //$table->foreign('semana_id')->references('id')->on('semanas');
            $table->string('local');
            $table->bigInteger('marcador_local');
            $table->string('visitante');
            $table->bigInteger('marcador_visitante');
            $table->string('hora');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::drop('partidos');

    }


}
