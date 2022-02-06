<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            'path' => '/images/product/default',
            'extention' => 'jpeg'
        ]);
        DB::table('media')->insert([
            'path' => '/images/product/product_image1',
            'extention' => 'png'
        ]);
        DB::table('media')->insert([
            'path' => '/images/product/Bitmap2',
            'extention' => 'png'
        ]);
        DB::table('media')->insert([
            'path' => '/images/product/Bitmap3',
            'extention' => 'png'
        ]);
        DB::table('media')->insert([
            'path' => '/images/product/Bitmap4',
            'extention' => 'png'
        ]);
        DB::table('media')->insert([
            'path' => '/images/product/Bitmap5',
            'extention' => 'png'
        ]);
    }
}
