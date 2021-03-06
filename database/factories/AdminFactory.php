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

/**
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */

$factory->define(
    App\Models\Admin::class,
    function (Faker\Generator $faker) {
        return [
            'name'          => $faker->firstName,
            'email'         => $faker->email,
            'password'      => $faker->password,
            'api_token'     => $faker->uuid,
            'expires_token' => \Carbon\Carbon::now()->addHours(1)
        ];
    }
);
