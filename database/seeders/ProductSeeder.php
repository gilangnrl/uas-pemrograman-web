<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('products')->insert([
            'responsible_person' => 1,
            'product_code' => "RLM8PRO",
            'product_name' => "Realme 8 Pro",
            'product_description' => "Ini Adalah Smartphone merk Realme",
            'product_price' => "3200000",
            'product_supplier' => "Realme By Oppo",
            'product_stock' => "189",
            'created_at' => $faker->date('Y-m-d'),
            'updated_at' => $faker->date('Y-m-d'),
        ]);
    }
}
