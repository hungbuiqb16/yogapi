<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'        => $faker->company,
        'address'     => $faker->address,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'website'     => $faker->domainName,
        'email'       => $faker->companyEmail
    ];
});
