<?php

use Faker\Generator as Faker;

$factory->define(App\Currency::class, function (Faker $faker) {
    return [
            'title' => $faker->company,
            'price' => $faker->randomDigit(0,1000),
            'short_name' =>substr($faker->company,0,3),
            'logo_url' => $faker->imageUrl(32,32),
    ];
});
