<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->integer('ma_khach_hang', true, true);
            $table->string('ho_kh', 100);
            $table->string('ten_kh', 100);
            $table->date('sinh_nhat');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi', 255);
            $table->string('email', 100);
            $table->string('dien_thoai', 100);
            $table->tinyInteger('ma_trang_thai_khach_hang', false, true);
            $table->timestamps();
            $table->string('password', 255); //12345

            $table->foreign('ma_trang_thai_khach_hang')->references('ma_trang_thai_khach_hang')->on('trang_thai_khach_hang')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
