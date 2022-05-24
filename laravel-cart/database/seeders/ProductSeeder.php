<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Prodcts=[
            [
                "name"=>"App MacBook S199",
                "details"=>" App MacBook S199 V1 PRO",
                "description"=>"Connect, share, and create like never before. Say hello to exciting new FaceTime updates. Explore a redesigned Safari. Discover and invent powerful new ways to work using Universal Control and Shortcuts. Stay in the moment with Focus. And so much more.",
                "brabd"=>"Apple",
                "price"=>1229,
                "shopping_cost"=>24,
                "image_path"=>"storage/product.png"
            ],

            [
                "name"=>"Apple TV 234",
                "details"=>" App TV S199 V1 PRO",
                "description"=>"Connect, share, and create like never before. Say hello to exciting new FaceTime updates. Explore a redesigned Safari. Discover and invent powerful new ways to work using Universal Control and Shortcuts. Stay in the moment with Focus. And so much more.",
                "brabd"=>"Apple",
                "price"=>2000,
                "shopping_cost"=>24,
                "image_path"=>"storage/product2.png"
            ]

        ];
        foreach($Prodcts as $key=>$value){
            Product::create($value);
        }
    }
}
