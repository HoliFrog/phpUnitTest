<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'creationDate' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'projectName' => $faker->firstNameFemale,
        'projectDetail' => $faker->text($maxNbChars = 200) ,
    ];
});
