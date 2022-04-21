<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khach_hang')->insert([
            ['ho_kh' => 'Ngụy', 'ten_kh' => 'Tấn', 'sinh_nhat' => '1980-01-01', 'gioi_tinh' => 1, 'dia_chi' => 'Tân Bình, Tp.HCM', 'email' => 'nguytan@gmail.com', 'dien_thoai' => '1234567', 'ma_trang_thai_khach_hang' => 1, 'password' => bcrypt('12345')],
            ['ho_kh' => 'Lại', 'ten_kh' => 'Thu Hà', 'sinh_nhat' => '1990-01-21', 'gioi_tinh' => 0, 'dia_chi' => 'Trảng Bom, Đồng Nai', 'email' => 'vothuha@gmail.com', 'dien_thoai' => '1234567', 'ma_trang_thai_khach_hang' => 1, 'password' => bcrypt('12345')],
            ['ho_kh' => 'Hứa', 'ten_kh' => 'Khải Minh', 'sinh_nhat' => '1996-03-02', 'gioi_tinh' => 1, 'dia_chi' => 'Q.5, Tp.HCM', 'email' => 'huakhaiminh@gmail.com', 'dien_thoai' => '1234567', 'ma_trang_thai_khach_hang' => 1, 'password' => bcrypt('12345')],
            ['ho_kh' => 'Vũ', 'ten_kh' => 'Hoàng Lâm', 'sinh_nhat' => '1996-04-13', 'gioi_tinh' => 1, 'dia_chi' => 'Trảng Bom, Đồng Nai', 'email' => 'josephlam1304@gmail.com', 'dien_thoai' => '1234567', 'ma_trang_thai_khach_hang' => 1, 'password' => bcrypt('12345')],
        ]);
    }
}
