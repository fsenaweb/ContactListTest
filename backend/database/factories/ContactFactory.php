<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use App\Models\ContactBook;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {

    return [
        'contact'           => $faker->companyEmail,
        'contact_book_id'   => factory(ContactBook::class)->create()->id
    ];

});
