<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Burger',
            'desc'=>'Fresh crispy bun , lettuce leaves , pickles , onion and a small patty flavored with mayonnaise and ketchup.',
            'price'=>'10',
            'featured'=>false,
            'cover_image'=>'burger.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Chicken Chop',
            'desc'=>'Prepared with boneless chicken meat, it is usually prepared with minced meat and served with various accompaniments.',
            'price'=>'9',
            'featured'=>true,
            'cover_image'=>'chicken_chop.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'French Fries',
            'desc'=>'Hot, thick & crispy. More delicious than ever, our signature piping hot, thick cut French Fries are golden on the outside and fluffy on the inside',
            'price'=>'2',
            'featured'=>true,
            'cover_image'=>'fries.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'2',
            'title'=>'Hakka Mee',
            'desc'=>'Dry flat noodle added lightly with oil & soya sauce, served with minced-pork, meat ball, fried stuff and tofu.',
            'price'=>'10',
            'featured'=>false,
            'cover_image'=>'hakka_mee.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Mashed Potato',
            'desc'=>'Made from real potatoes. It is chunky, hearty, buttery and perfect when paired with our savory brown gravy.',
            'price'=>'11',
            'featured'=>true,
            'cover_image'=>'mashed_potatoes.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'2',
            'title'=>'Nasi Lemak',
            'desc'=>'Nasi lemak is a Malay fragrant rice dish cooked in coconut milk and pandan leaf.',
            'price'=>'7',
            'featured'=>false,
            'cover_image'=>'nasi_lemak.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'2',
            'title'=>'Pan Mee',
            'desc'=>'Delicious flat noodle freshly made and served with dried ikan bilis and chilli.',
            'price'=>'10',
            'featured'=>true,
            'cover_image'=>'pan_mee.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'2',
            'title'=>'Roti Canai',
            'desc'=>'A popular breakfast and snack dish, served with dal and other types of curry, with a variety of ingredients such as sardines, meat, egg or cheese.',
            'price'=>'10',
            'featured'=>true,
            'cover_image'=>'roti_canai.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Spaghetti Carbonara',
            'desc'=>'An Italian pasta dish from Rome made with egg, hard cheese, guanciale, and black pepper.',
            'price'=>'10',
            'featured'=>true,
            'cover_image'=>'spaghetti_carbonara.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Spaghetti Meatballs',
            'desc'=>'An Italian-American dish consisting of spaghetti, tomato sauce and meatballs.',
            'price'=>'10',
            'featured'=>false,
            'cover_image'=>'spaghetti_meatballs.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'1',
            'title'=>'Steak',
            'desc'=>'Freshly grilled steak, tender and delicious, basted with butter giving it a rich flavour.',
            'price'=>'10',
            'featured'=>false,
            'cover_image'=>'steak.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);        
        DB::table('foods')->insert([
            'manager_id'=>'1',
            'category_id'=>'2',
            'title'=>'Wan Tan Mee',
            'desc'=>'Served with barbequed meat, pickled green chillies, and meat dumplings. ',
            'price'=>'10',
            'featured'=>false,
            'cover_image'=>'wan_tan_mee.jpg',
            'created_at'=>'2019-05-16 14:37:32',
        ]);
    }
}
