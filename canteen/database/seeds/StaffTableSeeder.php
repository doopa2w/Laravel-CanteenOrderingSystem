<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name'=>'staff',
            'email'=>'staff@staff.com',
            'password'=>bcrypt('123'),
            'remember_token'=>str_random(60),
        ]);
    }
}
