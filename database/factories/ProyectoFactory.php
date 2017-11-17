<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title'=>$faker->word
    ];
});
