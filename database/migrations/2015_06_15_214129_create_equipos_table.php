<?php


//php artisan make:migration create_equipos_table --create=equipos
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEquiposTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::drop('equipos');

    }


}
