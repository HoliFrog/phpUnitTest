<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    $user = factory(App\User::class)->create();
    return [
        'creationDate' => $faker->dateTimeAD($max = 'now', $timezone = null),
        'projectName' => $faker->firstNameFemale,
        'projectDetail' => $faker->text($maxNbChars = 200),
        'user_id' => $user->id,
        'author' => $user->name

    ];
});
