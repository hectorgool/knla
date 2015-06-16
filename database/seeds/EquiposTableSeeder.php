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
            'id' => 1,    
            'nombre' =>'Arizona'
          ),
          array(
            'id' => 2,    
            'nombre' =>'Atlanta'
          ),
          array(
            'id' => 3,    
            'nombre' =>'Baltimore'
          ),
          array(
            'id' => 4,    
            'nombre' =>'Buffalo'
          ),
          array(
            'id' => 5,    
            'nombre' =>'Carolina'
          ),
          array(
            'id' => 6,    
            'nombre' =>'Chicago'
          ),
          array(
            'id' => 7,    
            'nombre' =>'Cincinnati'
          ),
          array(
            'id' => 8,    
            'nombre' =>'Cleveland'
          ),
          array(
            'id' => 9,    
            'nombre' =>'Dallas'
          ),
          array(
            'id' => 10,    
            'nombre' =>'Denver'
          ),
          array(
            'id' => 11,    
            'nombre' =>'Detroit'
          ),
          array(
            'id' => 12,    
            'nombre' =>'Green Bay'
          ),
          array(
            'id' => 13,    
            'nombre' =>'Houston'
          ),
          array(
            'id' => 14,    
            'nombre' =>'Indianapolis'
          ),
          array(
            'id' => 15,    
            'nombre' =>'Jacksonville'
          ),
          array(
            'id' => 16,    
            'nombre' =>'Kansas City'
          ),
          array(
            'id' => 17,    
            'nombre' =>'Miami'
          ),
          array(
            'id' => 18,    
            'nombre' =>'Minnesota'
          ),
          array(
            'id' => 19,    
            'nombre' =>'N.Y. Giants'
          ),
          array(
            'id' => 20,    
            'nombre' =>'N.Y. Jets'
          ),
          array(
            'id' => 21,    
            'nombre' =>'New England'
          ),
          array(
            'id' => 22,    
            'nombre' =>'New Orleans'
          ),
          array(
            'id' => 23,    
            'nombre' =>'Oakland'
          ),
          array(
            'id' => 24,    
            'nombre' =>'Philadelphia'
          ),
          array(
            'id' => 25,    
            'nombre' =>'Pittsburgh'
          ),
          array(
            'id' => 26,    
            'nombre' =>'San Diego'
          ),
          array(
            'id' => 27,    
            'nombre' =>'San Francisco'
          ),
          array(
            'id' => 28,    
            'nombre' =>'Seattle'
          ),
          array(
            'id' => 29,    
            'nombre' =>'St. Louis'
          ),
          array(
            'id' => 30,    
            'nombre' =>'Tampa Bay'
          ),
          array(
            'id' => 31,    
            'nombre' =>'Tennessee'
          ),
          array(
            'id' => 32,    
            'nombre' =>'Washington'
          )

        ));

    }
}
