<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use App\Servicesrapides;
use Faker\Generator as Faker;

$factory->define(Servicesrapides::class, function (Faker $faker) {
    $services = Service::all();
    $tableau = array();
    for ($i=0; $i < 0; $i++) { 
        array_push($tableau, $services->id);
    };
    return [
        // 'random-service' => $faker->randomElement($tableau),
        'random-service' => $faker->numberBetween(0, count($services)),

    ];
});
