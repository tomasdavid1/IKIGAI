<?php

use Faker\Generator as Faker;
use App\Message;
use App\User;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'body' => $faker->text($maxNbChars = 190),
        'sender_id'=> User::all()->rand(),
        'recierver_id' => User::all()->rand(),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ];
});
