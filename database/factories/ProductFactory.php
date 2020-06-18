<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'sku'     =>  $faker->randomNumber,
        'name'        =>  $faker->word,
        'price'       =>  $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
    ];
});
