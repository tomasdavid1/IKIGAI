<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'summ' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'author' => $faker->name,
        'rating' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'location' => $faker->streetAddress,
        'summary' => $faker->text($maxNbChars = 190),
        'descrpition' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true)

    ];
});
