<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GiamGiaSeeder;
use Database\Seeders\LoaiSanPhamSeeder;
use Database\Seeders\SanPhamSeeder;
use Database\Seeders\ThuongHieuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            ThuongHieuSeeder::class,
            LoaiSanPhamSeeder::class,
            GiamGiaSeeder::class,
            SanPhamSeeder::class,
            CuaHangSeeder::class,
            TrangThaiKhachHangSeeder::class,
            TrangThaiHoaDonSeeder::class,
            KhachHangSeeder::class,
            HoaDonSeeder::class,
            ChiTietHoaDonSeeder::class,
            ChiTietBinhLuanSeeder::class, 
            BinhLuanSeeder::class, 
            TinTucSeeder::class,
            BannerSeeder::class,
        ]);
        
    }
}


