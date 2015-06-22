<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('alias');
            $table->string('email')->unique();
            $table->string('email2');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->bigInteger('monedas_temporada');
            $table->bigInteger('costo_playoff');
            $table->boolean('confirmed')->default(true);
            $table->boolean('playoff')->default(false);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::drop('users');
    }

}
