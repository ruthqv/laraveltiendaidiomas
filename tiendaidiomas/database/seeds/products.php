<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$filePath = public_path('images');
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            \DB::table('products')->insert(array(
                   'price' => $faker->randomNumber(2),
                   'sku'  => $faker->randomElement(['423er','rewd44','543dg']),
                   'product_id_category'  => $faker->randomElement(['1','2','3']),          
                   'created_at' => date('Y-m-d H:m:s'),
                   'image' => $faker->image($filePath,300, 300),
            ));
        }
    }
}
