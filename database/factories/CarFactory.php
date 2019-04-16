<?php

//use App\car;
//use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\car::class, function (Faker $faker) {
    $makes = array("Ford", "Honda", "Toyota");
    return [
        'make' => $makes[array_rand($makes)],
        'model' => $faker->company,
        'year' => $faker->year
    ];
});
