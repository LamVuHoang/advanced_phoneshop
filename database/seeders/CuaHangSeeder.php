<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuaHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cua_hang')->insert([
            [
                "ten_cua_hang" => "phoneshop", 
                "dia_chi" => 'Trảng Bom, Đồng Nai, Việt Nam', 
                "dien_thoai" => '0392262790', 
                "email" => 'josephlam1304@gmail.com',
                "facebook_url" => 'https://www.facebook.com/sergius.volam/',
                "twitter_url" => 'https://twitter.com/Minhyunhang',
                "created_at" => '2021-12-20 00:00:00', 
                "updated_at" => '2021-12-26 00:00:00'
            ],
        ]);
    }
}
