<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ManagerTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
