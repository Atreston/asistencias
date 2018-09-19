<?php

use Faker\Generator as Faker;

$factory->define(App\Materias::class, function (Faker $faker) {
    return [
        /*
        $table->increments('id');
            $table->string('nombre');
            $table->string('hora_inicio');
            $table->string('user_id');
            $table->string('salon');
        */
      'id' => $faker =>number,
      'nombre' => $faker->url,
      'salon' => $faker->paragraph;
    ];
});
