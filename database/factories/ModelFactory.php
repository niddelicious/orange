<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => userRandomizer(),
        'header' => $faker->sentence(),
        'body' => $faker->paragraph(),
    ];
});

$factory->define(App\Tag::class, function(Faker\Generator $faker) {
   return [
       'name' => $faker->word(),
   ] ;
});

$factory->define(App\Category::class, function(Faker\Generator $faker) {
    return [
        'title' => $faker->word(),
        'parent_id' => categoryParentRandomizer(),
    ] ;
});

function userRandomizer(){
    $countUsers = User::count();
    if($countUsers < 1){
        return factory(App\User::class)->create()->id;
    }

    $createUser = (bool) random_int(0, 1);
    if($createUser == true){
        return factory(App\User::class)->create()->id;
    }
    return User::inRandomOrder()->first();
}

function categoryParentRandomizer(){
    $countCategories = Category::count();
    if($countCategories < 1){
        return 0;
    }

    $useParentCategory = (bool) random_int(0, 1);
    if($useParentCategory == true){
        return Category::inRandomOrder()->first();
    }
    return 0;
}