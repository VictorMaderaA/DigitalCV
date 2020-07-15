<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Resume;
use Faker\Generator as Faker;

$factory->define(Resume::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'template_id' => $faker->word,
        'content' => $faker->word,
        'main' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
