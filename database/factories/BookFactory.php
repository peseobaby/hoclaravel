<?php
use App\Book;
use App\Author;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Book::class, function (Faker $faker) {
	
$authorIds = Author::select('id')->get()->toArray();
	return [
        'name' => $faker->name,
        'author_id' => array_rand($authorIds),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
