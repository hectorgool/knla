<?php

//php artisan make:seeder SemanaTableSeeder
use Illuminate\Database\Seeder;


class SemanaTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

	    DB::table('semanas')->delete();
	    
	    DB::table('semanas')->insert(array(
	    	array(
	    		'nombre' => 'Semana 1',
	        ),
	    	array(
	    		'nombre' => 'Semana 2',
	        ),
	    	array(
	    		'nombre' => 'Semana 3',
	        ),
	    	array(
	    		'nombre' => 'Semana 4',
	        ),	
	    	array(
	    		'nombre' => 'Semana 5',
	        ),
	    	array(
	    		'nombre' => 'Semana 6',
	        ),
	    	array(
	    		'nombre' => 'Semana 7',
	        ),
	    	array(
	    		'nombre' => 'Semana 8',
	        ),
	    	array(
	    		'nombre' => 'Semana 9',
	        ),
	    	array(
	    		'nombre' => 'Semana 10',
	        ),	        
	    	array(
	    		'nombre' => 'Semana 11',
	        ),
	    	array(
	    		'nombre' => 'Semana 12',
	        ),
	    	array(
	    		'nombre' => 'Semana 13',
	        ),
	    	array(
	    		'nombre' => 'Semana 14',
	        ),	
	    	array(
	    		'nombre' => 'Semana 15',
	        ),
	    	array(
	    		'nombre' => 'Semana 16',
	        ),	        		        	        	        
	    	array(
	    		'nombre' => 'Semana 17',
	        )	        
	    ));

    }

    
}
