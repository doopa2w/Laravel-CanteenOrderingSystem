<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'manager_id'=> '1',
            'title'=>'New launch of the Canteen Ordering System',
            'body'=>'Today we are glad to announce the launch of the Canteen Ordering System. It is now fully operational and customers can start using the system to order their food without queing at the store.',
            'cover_image'=>'fries.jpg',
            'created_at'=>'2019-05-10 12:32:22',
        ]);
        DB::table('posts')->insert([
            'manager_id'=> '1',
            'title'=>'Scheduled Maintenance this Sunday',
            'body'=>'We are planning a scheduled maintenance this Sunday, we apologize for any inconvenience caused.',
            'cover_image'=>'maintenance.jpg',
            'created_at'=>'2019-05-10 12:32:23',
        ]);
        DB::table('posts')->insert([
            'manager_id'=> '1',
            'title'=>'Limited time promotion for selected menu items',
            'body'=>'In conjunction with so-and-so festival, we want to take this opportunity to give our customers some discounts for some of our menu items.',
            'cover_image'=>'steak.jpg',
            'created_at'=>'2019-05-10 12:32:24',
        ]);
    }
}
