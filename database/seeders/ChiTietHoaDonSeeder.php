<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_hoa_don')->insert([
            ['ma_hoa_don' => 1, 'ma_san_pham' => 1, 'so_luong' => 1, 'don_gia' => 5296900, 'created_at' => '2021-06-25 07:00:30','updated_at' => '2021-06-25 07:00:30'],
            ['ma_hoa_don' => 2, 'ma_san_pham' => 10, 'so_luong' => 1, 'don_gia' => 20490000, 'created_at' => '2021-07-25 08:00:30','updated_at' => '2021-07-25 08:00:30'],
            ['ma_hoa_don' => 3, 'ma_san_pham' => 9, 'so_luong' => 1, 'don_gia' => 2490000, 'created_at' => '2021-08-25 09:00:30','updated_at' => '2021-08-25 09:00:30'],
            ['ma_hoa_don' => 4, 'ma_san_pham' => 15, 'so_luong' => 1, 'don_gia' => 5790000, 'created_at' => '2021-09-25 10:00:30','updated_at' => '2021-09-25 10:00:30'],
            ['ma_hoa_don' => 5, 'ma_san_pham' => 16, 'so_luong' => 1, 'don_gia' => 8190000, 'created_at' => '2021-10-25 11:00:30','updated_at' => '2021-10-25 11:00:30'],
            ['ma_hoa_don' => 6, 'ma_san_pham' => 13, 'so_luong' => 1, 'don_gia' => 41990000, 'created_at' => '2021-12-25 12:00:30','updated_at' => '2021-12-25 12:00:30'],
        ]);
    }
}
