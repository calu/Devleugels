<?php

use Faker\Generator as Faker;

$factory->define(App\Intake::class, function (Faker $faker) {
    return [
        'voornaam' => $faker->firstname,
        'familienaam' => $faker->name,
        'straat' => $faker->streetName,
        'huisnummer' => $faker->buildingNumber,
        'bus' => $faker->secondaryAddress,
        'postcode' => $faker->postcode,
        'gemeente' => $faker->city,
        'telefoon' => $faker->phoneNumber,
        'gsm' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'rubriek' => 'overnachting',
        'vraag' => $faker->text,
        'openstaand' => true,
    ];
});
