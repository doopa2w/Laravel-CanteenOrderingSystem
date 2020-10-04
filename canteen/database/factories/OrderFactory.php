<?php

use App\Order;;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Order::class, function (Faker $faker, $created_at) {

    return [
        'customer_id'=>rand(1, 3),
        'food_id'=>rand(1, 12),
        'manager_id'=>1,
        'billing_total'=>rand(7, 12),
        'status'=>$faker->randomElement(['preparing', 'ready','collected','cancelled']),
        'payment_gateway'=>'cash',
        'paid'=>$faker->boolean(),
        'created_at'=>$created_at,
        //'created_at'=>Carbon::now()->subDays(rand(0, 30)),
    ];
});
