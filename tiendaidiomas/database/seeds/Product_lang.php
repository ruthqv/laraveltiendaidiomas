<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Product_lang extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            \DB::table('product_langs')->insert(array(
                   'id_product' => $faker->randomElement(['1','2','3','4','5','6','7','8','9']),
                   'id_lang'  => $faker->randomElement(['1','2']),
                   'name'  => $faker->name,          
                   'description' => $faker->text($maxNbChars = 200) ,
                   'features' => $faker->text($maxNbChars = 50) ,
            ));
           }
     }
}
