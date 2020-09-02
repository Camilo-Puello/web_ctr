<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aporte;
use Faker\Generator as Faker;

$factory->define(Aporte::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'tipo' => $faker->sentence,
        'doc' => $faker->sentence,
        'email' => $faker->sentence,
        'contacto1' => $faker->sentence,
        'contacto2' => $faker->sentence,
        'empresa' => $faker->sentence,
        'razon' => $faker->sentence,
        'nit' => $faker->sentence,
        'descripcion' => $faker->sentence,
        'adjunto' => $faker->sentence,
    ];
});
