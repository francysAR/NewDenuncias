<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Soporte;
use Faker\Generator as Faker;

$factory->define(Soporte::class, function (Faker $faker) {

    return [
        'nombre' => $faker->text,
        'cedula' => $faker->text,
        'telefono' => $faker->text,
        'encargado' => $faker->text,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
