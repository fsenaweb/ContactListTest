<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactBook;
use Faker\Generator as Faker;
use Faker\Factory;

$factory->define(ContactBook::class, function (Faker $faker) {
    return [
        'name'      => $faker->firstName,
        'surname'   => $faker->lastName
    ];
});
