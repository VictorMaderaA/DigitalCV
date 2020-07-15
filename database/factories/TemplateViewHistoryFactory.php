<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TemplateViewHistory;
use Faker\Generator as Faker;

$factory->define(TemplateViewHistory::class, function (Faker $faker) {

    return [
        'template_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
