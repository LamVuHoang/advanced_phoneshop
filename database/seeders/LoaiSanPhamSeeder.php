<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_san_pham')->insert([
            ["ten_loai_san_pham" => "Điện thoại Android", "ghi_chu" => "", "hinh_anh" => ""],
            ["ten_loai_san_pham" => "iPhone", "ghi_chu" => "", "hinh_anh" => ""],
            ["ten_loai_san_pham" => "Tablet Android", "ghi_chu" => "", "hinh_anh" => ""],
            ["ten_loai_san_pham" => "iPad", "ghi_chu" => "", "hinh_anh" => ""],
            ["ten_loai_san_pham" => "Phụ kiện điện thoại", "ghi_chu" => "", "hinh_anh" => ""],
        ]);
    }
}
