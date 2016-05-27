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

$factory->define(SimpleBlog\Users::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,

    ];
});

$factory->define(SimpleBlog\Posts::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->paragraph(4),
        'date' => $faker->dateTime(),
        'author' => $faker->numberBetween($min = 1, $max = 5),

    ];
});
