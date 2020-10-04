<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'name'=>'manager',
            'email'=>'manager@manager.com',
            'password'=>bcrypt('123'),
            'remember_token'=>str_random(60),
        ]);
    }
}
