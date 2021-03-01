<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Denuncia;
use Faker\Generator as Faker;

$factory->define(Denuncia::class, function (Faker $faker) {

    return [
        'nombre' => $faker->text,
        'telefono' => $faker->text,
        'asunto' => $faker->text,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
