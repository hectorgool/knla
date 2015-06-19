<?php

//php artisan db:seed
//php artisan migrate:refresh --seed

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('EquiposTableSeeder');
        $this->call('UserTableSeeder');

        Model::reguard();
    }
}
