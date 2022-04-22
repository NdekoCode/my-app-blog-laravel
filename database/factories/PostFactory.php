<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Post::class, function (Faker $faker) {
    $rand = rand(1, 100);
    return [
        'title' => $faker->text(70),
        'body' => implode(',', $faker->paragraphs(15)),
        'image_desc_small' => "https://picsum.photos/id/" . $rand . "/500/700",
        'image_desc_big' => "https://picsum.photos/id/" . $rand . "/1000/1400",
        'created_at' => $faker->date(),
        'updated_at' => $faker->date()
    ];
});
