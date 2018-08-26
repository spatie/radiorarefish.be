<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Playlist::class, function (\Faker\Generator $faker) {
    $playlistContent = collect(range(1, $faker->numberBetween(1, 10)))
        ->map(function (int $index) use ($faker) {
            return "{$index}. {$faker->name} - {$faker->sentence} (from: \"{$faker->sentence()}\")";
        })
        ->implode('<br />');

    return [
        'name' => $faker->sentence(),
        'text' => $playlistContent,
        'publish_date' => $faker->dateTimeBetween(),
    ];
});
