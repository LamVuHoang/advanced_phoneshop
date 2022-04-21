<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            ['hinh_banner' => 'banner1.png', 'vi_tri' => 1, 'trang_thai' => 1, 'ghi_chu' => 'Vị trí đầu tiên trên Trang chủ', 'url' => 'http://phoneshop.vn'],
            ['hinh_banner' => 'banner2.png', 'vi_tri' => 2, 'trang_thai' => 1, 'ghi_chu' => 'Vị trí giữa Trang chủ, bên trái', 'url' => 'http://phoneshop.vn'],
            ['hinh_banner' => 'banner3.jpeg', 'vi_tri' => 3, 'trang_thai' => 1, 'ghi_chu' => 'Vị trí giữa Trang chủ, bên phải', 'url' => 'http://phoneshop.vn'],
        ]);
    }
}
