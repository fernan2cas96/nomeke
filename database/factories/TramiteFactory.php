<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tramite;
use Faker\Generator as Faker;

$factory->define(Tramite::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
