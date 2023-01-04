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
            ['product_type' => 'Equipment'],
            ['product_type' => 'Product'],
            ['product_type' => 'Accessorie'],
            ['product_type' => 'Service'],
            ['product_type' => 'Restaurant'],
            ['product_type' => 'Club/Gym'],                                 
        ];
 
        DB::table('product_type')->insert($product_type);
    }
}
