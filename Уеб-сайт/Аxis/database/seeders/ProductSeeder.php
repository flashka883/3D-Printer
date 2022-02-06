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
            'id' => '1',
            'slug' => 'test',
            'name' => 'test',
            'size' => 'M',
            'default_image_id' => 2,
            'quantity' => 10,
            'price' => 600
        ]);
    }
}
