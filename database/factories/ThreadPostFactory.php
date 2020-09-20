<?php

use App\Forum_Models\Post;
use App\Forum_Models\Thread;
use App\User;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
  return [
    'user_id' => User::all()->random()->id,
    'thread_id' => Thread::all()->random()->id,
    'title' => $faker->sentence(4),
    'content' => $faker->sentences(8, true),
    'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
    'updated_at' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now'),
  ];
});