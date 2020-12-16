<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use App\Author;

$factory->define(Book::class, function (Faker $faker) {
    $random =rand(1,100);
    $cover = "https://picsum.photos/id/{$random}/200/300";

    return [
        'author_id' => Author::inRandomOrder()->first()->id,
        'judul' => $faker->sentence(5),
        'deskripsi' => $faker->sentence(50),
        'cover' => $cover,
        'qty' => rand(1,20),

    ];
});
