<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietBinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_binh_luan')->insert([
            ['danh_gia_sao' => 4, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-06-26 08:00:00', 'updated_at' => '2021-06-26 08:00:00'],
            ['danh_gia_sao' => 5, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-07-26 08:00:00', 'updated_at' => '2021-07-26 08:00:00'],
            ['danh_gia_sao' => 4, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-08-26 08:00:00', 'updated_at' => '2021-08-26 08:00:00'],
            ['danh_gia_sao' => 5, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-09-26 08:00:00', 'updated_at' => '2021-09-26 08:00:00'],
            ['danh_gia_sao' => 4, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-10-26 08:00:00', 'updated_at' => '2021-10-26 08:00:00'],
            ['danh_gia_sao' => 5, 'tieu_de' => 'SP tốt', 'loi_binh_luan' => 'Good chi_tiet_binh_luan', 'created_at' => '2021-12-26 08:00:00', 'updated_at' => '2021-12-26 08:00:00'],
        ]);
    }
}
