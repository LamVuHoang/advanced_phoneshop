<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->integer('ma_hoa_don', false, true);
            $table->integer('ma_san_pham', false, true);
            $table->integer('so_luong', false, true);
            $table->integer('don_gia', false, true);
            // $table->bigInteger('thanh_tien', false, true);
            
            $table->timestamps();

            $table->foreign('ma_san_pham')->references('ma_san_pham')->on('san_pham')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_hoa_don')->references('ma_hoa_don')->on('hoa_don')
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
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
}
