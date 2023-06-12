<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->insert([
            'sec1_title' => 'About',
            'sec1_subtitle' => 'PT. SUARA ABADI INDONESIA', 
            'sec1_isi_konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, repellendus ipsa! Minima ea architecto praesentium accusamus nemo temporibus possimus saepe?

            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, repellendus ipsa! Minima ea architecto praesentium accusamus nemo temporibus possimus saepe?
            
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, repellendus ipsa! Minima ea architecto praesentium accusamus nemo temporibus possimus saepe?
            
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, repellendus ipsa! Minima ea architecto praesentium accusamus nemo temporibus possimus saepe?
            
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, repellendus ipsa! Minima ea architecto praesentium accusamus nemo temporibus possimus saepe?',
            'sec1_img' => null,
            'sec2_title' =>'We are Young but We Have Much Experience', 
            'sec2_img1' => null, 
            'sec2_img2' => null, 
            'sec3_title'=> 'What We Do', 
            'sec3_subtitle'=> 'sound system solutions rental specialist', 
            'sec3_jenis' => null, 
            'user_id' => 1
        ]);
    }
}
