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
        DB::table('product')->insert([
            [
                'name'=>'OnePlus 9 series',
                'price'=>'₹49,999.00',
                'category'=>'mobiles',
                'description'=>'A revolutionary smartphone with OxygenOS 11.2.3.3 and improved battery life.',
                'gallery'=> 'https://static.digit.in/default/edf419a0dbbbc2a7763f379e319939607f459c81.jpeg'
            ],
            [
                'name'=>'Ashirwaad Atta 10 KG Pack',
                'price'=>'₹ 375.00',
                'category'=>'Groceries',
                'description'=>'Filled with goodness for a healthy life',
                'gallery'=> 'https://www.aashirvaad.com/assets/Aashirvaad/images/banner_img.jpg'
            ],
            [
                'name'=>'Bata Footware',
                'price'=>'₹1799',
                'category'=>'sneakers',
                'description'=>'Get Comfort with Style....Surprisingly BATA',
                'gallery'=> 'https://cdn.grabon.in/gograbon/images/merchant/1575960889194.png'
            ],
            [
                'name'=>'Titan Watches',
                'price'=>'₹ 6,295',
                'category'=>'watches',
                'description'=>'The jewel of every beautiful women.....',
                'gallery'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlh313SF6K7ARme8XZRvnr3jbAAL5jy2PH8Q&usqp=CAU'
            ]
        ]);
    }
}
