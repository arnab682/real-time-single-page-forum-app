<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;
use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id' => function(){
        	return User::all()->random();
        },
    ];
});
