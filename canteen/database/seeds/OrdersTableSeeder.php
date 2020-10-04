<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(30, 1, -1) as $i) {
            $date = Carbon::now()->subDays($i);
            foreach (range(1, rand(1,30)) as $j) {
                factory(App\Order::class)->create(['created_at' => $date]);
                $date->addMinutes();
            }
        }
        //factory(App\Order::class, 300)->create(;
    }
}
