<?php

use Faker\Generator as Faker;
use App\Author;
use Illuminate\Support\Str;


$factory->define(App\Author::class, function (Faker $faker) {
    return [
		'name' => $faker->name,
		'created_at' => new DateTime,
		'updated_at' => new DateTime,
	];
});

