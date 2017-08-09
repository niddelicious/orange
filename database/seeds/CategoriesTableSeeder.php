<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        factory('App\Category', 3)->create();
        factory('App\Category', 3)->create();
        factory('App\Category', 3)->create();
        factory('App\Category', 3)->create();
        factory('App\Category', 3)->create();
    }
}