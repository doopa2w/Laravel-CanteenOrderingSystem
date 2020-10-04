<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name'=>'n',
            'email'=>'n@n.com',
            'password'=>bcrypt('123'),
            'remember_token'=>str_random(60),
        ]);
        DB::table('customers')->insert([
            'name'=>'dtzl',
            'email'=>'dtzl@example.com',
            'password'=>bcrypt('dog123456'),
            'remember_token'=>str_random(60),
        ]);
        DB::table('customers')->insert([
            'name'=>'yoyo',
            'email'=>'yoyo@example.com',
            'password'=>bcrypt('12345678'),
            'remember_token'=>str_random(60),
        ]);
    }
}
