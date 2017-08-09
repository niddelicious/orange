<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        factory('App\User', 5)->create();
    }
}