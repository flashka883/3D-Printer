<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            'product_id' => 1,
            'media_id' => 2,
        ]);
        DB::table('product_images')->insert([
            'product_id' => 1,
            'media_id' => 3,
        ]);
        DB::table('product_images')->insert([
            'product_id' => 1,
            'media_id' => 4,
        ]);
        DB::table('product_images')->insert([
            'product_id' => 1,
            'media_id' => 5,
        ]);
        DB::table('product_images')->insert([
            'product_id' => 1,
            'media_id' => 6,
        ]);
    }
}
