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
                'gallery'=> 'https://st1.bgr.in/wp-content/uploads/2021/03/oneplus-9-series-company.jpg'
            ],
            [
                'name'=>'Ashirwaad Atta 10 KG Pack',
                'price'=>'₹ 375.00',
                'category'=>'Groceries',
                'description'=>'Filled with goodness for a healthy life',
                'gallery'=> 'https://mir-s3-cdn-cf.behance.net/projects/404/9c284988149923.Y3JvcCwxMjAwLDkzOCwwLDEzMA.jpg'
            ],
            [
                'name'=>'Bata ',
                'price'=>'₹1799',
                'category'=>'sneakers',
                'description'=>'Get Comfort with Style....Surprisingly BATA',
                'gallery'=> 'https://asset22.ckassets.com/resources/image/staticpage_images/Cat-Men-Footwear-SlippersFlipFlops-Myntra-Bata-01.jpg'
            ],
            [
                'name'=>'Titan',
                'price'=>'₹ 6,295',
                'category'=>'watches',
                'description'=>'The jewel of every beautiful women.....',
                'gallery'=> 'https://www.titancompany.in/sites/default/files/Main-banner-1920x861.jpg'
            ],
            [
                'name'=>'Biba',
                'price'=>'₹2000',
                'category'=>'Apparels',
                'description'=>'In the heart of Every Beauty.',
                'gallery'=> 'https://lh3.googleusercontent.com/AwqKF_fuIC5YbZItnL3BoLn9x8JLpV_3mElrgf1X1Y7kBwUa1_2QxChi1tktVxdlBE1PWUmYgkeHFNGRzpq0KFgWQdQ=w1000'
            ],
            [
                'name'=>'Lakme',
                'price'=>'₹500',
                'category'=>'Cosmetics',
                'description'=>'Lakme...Reinvent',
                'gallery'=> 'https://image.slidesharecdn.com/lakme-140911074648-phpapp02/95/lakme-brand-management-1-638.jpg?cb=1410421686'
            ],
            [
                'name'=>'LG  OLED TV',
                'price'=>'₹1,50,799',
                'category'=>'Electronics',
                'description'=>'Not just a TV....A whole new generation of Television.',
                'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/917X-r4zWPL._AC_SL1500_.jpg'
            ]
        ]);
    }
}
