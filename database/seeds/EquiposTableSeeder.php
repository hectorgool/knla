<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table('equipos')->delete();

        DB::table('equipos')->insert(array(
            array(
            	'id'=>1,    
            	'nombre'=>'Equipo 1'
            ),
            array(
            	'id'=>2,    
            	'nombre'=>'Equipo 2'
            )

        ));

    }
}
