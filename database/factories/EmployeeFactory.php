<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name'  => $faker->lastName,
        'address'    => $faker->address,
        'phone'      => $faker->e164PhoneNumber,
        'email'      => $faker->email,
        'company_id' => function() {
        	return Company::all()->random();
        }
    ];
});
