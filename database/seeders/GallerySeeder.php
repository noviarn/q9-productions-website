<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gallerys')->insert([
            'title' => 'Gallery',
            'img_gallery' => null,
            'user_id' => 1,
        ]);//
    }
}
