<?php

use Faker\Generator as Faker;

$factory->define(App\Publication::class, function (Faker $faker) {
    return [
        'group_id' => mt_rand(1,4),
        'title'=> $faker->sentence,
        'description'=> $faker->text
    ];
});
