<?php

use App\House;
use Faker\Generator as Faker;

$factory->define(App\Cart::class, function (Faker $faker) {
    foreach (House::all() as $house) {
        return [
            'itemID' => $house->id,
            'itemName' => $house->name,
            'userID' => 2
        ];
    }
});
