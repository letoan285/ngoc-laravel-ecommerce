<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    
        for ($i = 0; $i < 100;  $i++) {
            $name = $faker->realText(rand(10,12));
            $price = rand(900, 200);
            $products = [
                'name' => $name,
                'slug' => Str::slug($name, '-').'.html',
                'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'short_description' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                'list_price' => $price,
                'sell_price' => $price*0.8,
                'image' => 'uploads/products/iphone.jpg',
                'category_id' => rand(1, 5)
            ];
            DB::table('products')->insert($products);
        }
       
    }
}
