<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Noticias;
use Faker\Generator as Faker;

$factory->define(Noticias::class, function (Faker $faker) {
    return [
        //
        'tittle' => $faker->jobTitle,
        'content' => $faker->paragraph,
        'image_url' => $faker->url,
        'userId' => $faker->randomDigitNotNull
    ];
});
