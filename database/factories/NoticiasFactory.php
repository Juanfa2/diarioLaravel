<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Noticia;
use Faker\Generator as Faker;
use App\Categoria;




$factory->define(Noticia::class, function (Faker $faker) {
	$categorias = Categoria::all()->random(1)->first();
    return [
        'titulo' => $faker->sentence(6),
        'entrada' => $faker->sentence(300), 
        'cuerpo' => $faker->paragraph(2),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
        'categoria_id' => $categorias->id

    ];
});
