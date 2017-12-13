<?php

use Faker\Generator as Faker;
use App\Message;
use App\User;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'body' => $faker->text($maxNbChars = 190),
        'sender_id'=> 1,
        'reciever_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ];
});
