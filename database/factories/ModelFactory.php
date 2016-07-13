<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(CRM\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(CRM\Models\Address::class, function (Faker\Generator $faker) {
    return [
        'state' => $faker->word,
        'city' => $faker->word,
        'district' => $faker->word,
        'street' => $faker->word,
        'number' => $faker->postcode,
        'complement' => $faker->word,
        'zipcode' => $faker->postcode,
    ];
});

$factory->define(CRM\Models\Email::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
    ];
});

$factory->define(CRM\Models\Phone::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->postcode,
    ];
});

$factory->define(CRM\Models\Qualification::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(CRM\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'atendente' => $faker->word,
    ];
});