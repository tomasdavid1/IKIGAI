<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText(20),
        'author' => $faker->numberBetween($min = 1, $max = 50),
        'rating' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'location' => $faker->streetAddress,
        'summary' => $faker->realText(60),
        'description' => $faker->paragraph(200),
        'summX' => $faker->numberBetween($min = -20, $max = 20),
        'summY' => $faker->numberBetween($min = -20, $max = 20)

    ];
});
