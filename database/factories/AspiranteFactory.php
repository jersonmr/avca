<?php

use App\Models\rrhh\Aspirante;
use Faker\Generator as Faker;

$factory->define(Aspirante::class, function (Faker $faker) {
    return array(
        'cedula' => $faker->randomNumber($nbDigits = 8),
        'nacionalidad' => $faker->randomElement(array('v', 'e')),
        'fecha_nacimiento' => $faker->date('Y-m-d', now()),
        'sexo' => $faker->randomElement(array('f', 'm')),
        'apellido' => $faker->lastName,
        'nombre' => $faker->name,
        'email' => $faker->safeEmail,
        'telefono_movil' => $faker->randomNumber($nbDigits = 11),
        'telefono_fijo' => $faker->randomNumber($nbDigits = 11),
        'curriculum' => 'avca-rrhh-mer.pdf',
        'vacante_id' => rand(1, 100)
    );
});
