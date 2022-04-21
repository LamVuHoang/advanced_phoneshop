<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoa_don')->insert([
            ['ma_khach_hang' => 1, 'tong_tien' => 5296900, 'tien_tra_truoc' => 5296900, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 4, 'created_at' => '2021-06-25 07:00:30','updated_at' => '2021-06-25 07:00:30'],
            ['ma_khach_hang' => 2, 'tong_tien' => 20490000, 'tien_tra_truoc' => 20490000, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 2, 'created_at' => '2021-07-25 08:00:30','updated_at' => '2021-07-25 08:00:30'],
            ['ma_khach_hang' => 3, 'tong_tien' => 2490000, 'tien_tra_truoc' => 2490000, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 3, 'created_at' => '2021-08-25 09:00:30','updated_at' => '2021-08-25 09:00:30'],
            ['ma_khach_hang' => 4, 'tong_tien' => 5790000, 'tien_tra_truoc' => 5790000, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 1, 'created_at' => '2021-09-25 10:00:30','updated_at' => '2021-09-25 10:00:30'],
            ['ma_khach_hang' => 1, 'tong_tien' => 8190000, 'tien_tra_truoc' => 8190000, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 3, 'created_at' => '2021-10-25 11:00:30','updated_at' => '2021-10-25 11:00:30'],
            ['ma_khach_hang' => 2, 'tong_tien' => 41990000, 'tien_tra_truoc' => 41990000, 'con_lai' => 0, 'ma_trang_thai_hoa_don' => 4, 'created_at' => '2021-12-25 12:00:30','updated_at' => '2021-12-25 12:00:30'],
        ]);
    }
}
