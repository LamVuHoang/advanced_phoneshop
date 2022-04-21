<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrangThaiKhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trang_thai_khach_hang')->insert([
            ['ten_trang_thai' => 'Đình chỉ'],
            ['ten_trang_thai' => 'Hoạt động'],
            ['ten_trang_thai' => 'Hạn chế'],
        ]);
    }
}
