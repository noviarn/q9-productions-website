<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contacts')->insert([
            'title' => 'Contact Us',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'email' => 'ops.q9p@gmail.com',
            'whatsapp' => '+62 811 9847 234',
            'instagram' => '@q9productions',
            'facebook' => 'Q9 Productions',
            'address' => 'Jl. Tegal Rotan Raya No.38, RT.2/RW.1 Pondok Jaya, Pondok Aren,Tangerang Selatan,Banten 15413',
            'user_id' => 1,
        ]);
    }
}
