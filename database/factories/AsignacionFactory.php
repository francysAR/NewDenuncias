<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Asignacion;
use Faker\Generator as Faker;

$factory->define(Asignacion::class, function (Faker $faker) {

    return [
        'soporte_id' => $faker->randomDigitNotNull,
        'denuncia_id' => $faker->randomDigitNotNull,
        'fecha' => $faker->text,
        'proceso' => $faker->text,
        'observacion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
