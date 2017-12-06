<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'author' => $faker->name,
        'rating' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'location' => $faker->streetAddress,
        'summary' => $faker->text($maxNbChars = 190),
        'descrpition' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'summX' => $faker->numberBetween($min = -20, $max = 20),
        'summY' => $faker->numberBetween($min = -20, $max = 20)

    ];
});
