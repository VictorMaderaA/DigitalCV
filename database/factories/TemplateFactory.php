<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Template;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'folderName' => $faker->word,
        'image' => $faker->word,
        'previewImage' => $faker->word,
        'active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
