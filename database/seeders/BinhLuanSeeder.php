<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binh_luan')->insert([
            ['ma_san_pham' => 1, 'ma_chi_tiet_binh_luan' => 1, 'ma_khach_hang' => 1],
            ['ma_san_pham' => 10, 'ma_chi_tiet_binh_luan' => 2, 'ma_khach_hang' => 2],
            ['ma_san_pham' => 9, 'ma_chi_tiet_binh_luan' => 3, 'ma_khach_hang' => 3],
            ['ma_san_pham' => 15, 'ma_chi_tiet_binh_luan' => 4, 'ma_khach_hang' => 4],
            ['ma_san_pham' => 16, 'ma_chi_tiet_binh_luan' => 5, 'ma_khach_hang' => 1],
            ['ma_san_pham' => 13, 'ma_chi_tiet_binh_luan' => 6, 'ma_khach_hang' => 2],
        ]);
    }
}
