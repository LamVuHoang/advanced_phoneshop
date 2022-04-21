<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thuong_hieu')->insert([
            ["ten_thuong_hieu" => "Sharp", "logo" => "logo_sharp.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Motorola", "logo" => "logo_motorola.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Nokia", "logo" => "nokia_white_logo.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Xiaomi", "logo" => "logo_xiaome.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Realme", "logo" => "realme-logo.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Vivo", "logo" => "logo_vivo.jpeg", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Sony", "logo" => "SONY-LOGO.jpg", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "itel", "logo" => "logo_itel.jpg", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "iPhone", "logo" => "logo_apple.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Samsung", "logo" => "Samsung-Logo.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Lenovo", "logo" => "logo-lenovo.png", "ghi_chu" => '', "trang_thai" => 1],
            ["ten_thuong_hieu" => "Huawei", "logo" => "logo-huawei.png", "ghi_chu" => '', "trang_thai" => 1],
            ]);
    }
}
