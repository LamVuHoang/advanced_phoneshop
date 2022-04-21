<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->integer('ma_hoa_don', true, true);
            $table->integer('ma_khach_hang', false, true);
            $table->bigInteger('tong_tien', false, true);
            $table->bigInteger('tien_tra_truoc', false, true);
            $table->bigInteger('con_lai', false, true);
            $table->tinyInteger('ma_trang_thai_hoa_don', false, true)->default(2);
            $table->string('ghi_chu', 255)->nullable();
            $table->timestamps();

            $table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hang')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_trang_thai_hoa_don')->references('ma_trang_thai_hoa_don')->on('trang_thai_hoa_don')
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
        Schema::dropIfExists('hoa_don');
    }
}
