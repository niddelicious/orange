<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    public function run()
    {
        factory('App\Tag', 5)->create();
    }
}