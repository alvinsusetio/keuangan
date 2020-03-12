<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'body' => $faker->paraghraph(30)
    ];
});
