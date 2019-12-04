<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'        => $faker->title,
        'description' => $faker->text,
        'size'        => 0,
        'image'       => '',
        'category_id' => Str::random(10),
    ];
});
