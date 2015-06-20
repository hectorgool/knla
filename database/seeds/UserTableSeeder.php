<?php


//php artisan make:seeder UserTableSeeder
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    
	    DB::table('users')->delete();
	    
	    DB::table('users')->insert(array(
	    	array(
	    		'firstname' => 'Hector',
	    		'lastname'  => 'Gonzalez',
	        	'email'     => 'hectorgool@gmail.com',
	        	'password'  => Hash::make('asdf'),
	        	'confirmed' => true,
	        ),
	    	array(
	    		'firstname' => 'Patricio',
	    		'lastname'  => 'Avedaño',
	        	'email'     => 'patricio@gmail.com',
	        	'password'  => Hash::make('asdf'),
	        	'confirmed' => true,
	        )	        
	    ));

    }
}
