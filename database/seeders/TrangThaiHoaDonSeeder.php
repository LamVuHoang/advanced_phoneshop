<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrangThaiHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trang_thai_hoa_don')->insert([
            ['ten_trang_thai' => 'Đơn hàng bị hủy'],
            ['ten_trang_thai' => 'Đơn hàng chưa xử lý'],
            ['ten_trang_thai' => 'Đơn hàng đang vận chuyển'],
            ['ten_trang_thai' => 'Đơn hàng đã giao và thanh toán'],
        ]);
    }
}
