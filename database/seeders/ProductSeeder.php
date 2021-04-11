<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'OnePlus 9 series',
                'price'=>'₹49,999.00',
                'category'=>'mobiles',
                'description'=>'A revolutionary smartphone with OxygenOS 11.2.3.3 and improved battery life.',
                'gallery'=> 'https://i.ytimg.com/vi/E-51Kc42hoQ/maxresdefault.jpg'
            ],
            [
                'name'=>'Ashirwaad Atta 10 KG Pack',
                'price'=>'₹ 375.00',
                'category'=>'Groceries',
                'description'=>'Filled with goodness for a healthy life',
                'gallery'=> 'https://i.ytimg.com/vi/Z4rHflM8b5E/maxresdefault.jpg'
            ],
            [
                'name'=>'Bata Footware',
                'price'=>'₹1799',
                'category'=>'sneakers',
                'description'=>'Get Comfort with Style....Surprisingly BATA',
                'gallery'=> 'https://pbs.twimg.com/media/Demwxu7UYAAm6J3.jpg'
            ],
            [
                'name'=>'Titan Watches',
                'price'=>'₹ 6,295',
                'category'=>'watches',
                'description'=>'The jewel of every beautiful women.....',
                'gallery'=> 'https://i.pinimg.com/originals/8d/67/5c/8d675c6e0c3ea551581a8ac542bb4e6a.png'
            ]
        ]);
    }
}
