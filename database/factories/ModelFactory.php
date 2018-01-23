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
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'about' => $faker->catchPhrase(),
        'contact' => $faker->phoneNumber,
        'location' => $faker->city .', ' .$faker->country,
        'gender' => $faker->randomElement(['male', 'female', 'other']),
        'birthday' => $faker->date(),
        'privacy' => $faker->randomElement(['public', 'private', 'follower']),
        'is_activated' => true,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserRole::class, function (Faker\Generator $faker) {
    static $userId = 1;

    return [
        'user_id' => $userId++,
        'role_id' => $faker->numberBetween(1, 6)
    ];
});

$factory->define(App\Story::class, function (Faker\Generator $faker) {
    return [
        'story' => $faker->catchPhrase(),
        'impression' => $faker->numberBetween(0, 5000000),
        'like' => $faker->numberBetween(0, 3000000),
        'has_media' => $faker->boolean(),
        'privacy' => $faker->randomElement(['male', 'female', 'other'])
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    return [
        'story' => $faker->catchPhrase(),
        'story_id' => $faker->numberBetween(1, 2000),
        'storage' => $faker->randomElement(['local', 'aws']),
        'source' => $faker->randomElement(['image_story_1.jpg', 'image_story_2.jpg', 'video_story_1.mp4', 'video_story_2.mp4']),
        'caption' => $faker->catchPhrase(),
        'mime' => $faker->randomElement(['images/jpg', 'images/png', 'video/mp4'])
    ];
});