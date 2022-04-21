<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiamGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('giam_gia')->insert([
            ["code_giam_gia" => "christmas", "so_tien_giam_gia" => 1500000, "trang_thai" => 0, "thoi_gian_bat_dau" => '2021-12-20 00:00:00', "thoi_gian_ket_thuc" => '2021-12-26 00:00:00'],
            ["code_giam_gia" => "tetduonglich", "so_tien_giam_gia" => 600000, "trang_thai" => 1, "thoi_gian_bat_dau" => '2022-01-01 00:00:00', "thoi_gian_ket_thuc" => '2022-01-14 00:00:00'],
        ]);
    }
}
