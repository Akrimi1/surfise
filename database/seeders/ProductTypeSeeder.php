<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_type')->truncate();
 
        $product_type = [
            ['product_type' => 'Equipments'],
            ['product_type' => 'Products'],
            ['product_type' => 'Accessories'],
            ['product_type' => 'Services'],
            ['product_type' => 'Restaurants'],
            ['product_type' => 'Clubs/Gyms'],                                 
        ];
 
        DB::table('product_type')->insert($product_type);
    }
}
