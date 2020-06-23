<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'username' => '投稿者名',
        'title' => '投稿のタイトル',
        'body' => "本文",
        'email' => 'e-mail',
        'url' => 'url',
    ];
});
