<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->integer('ma_san_pham', false, true);
            $table->integer('ma_chi_tiet_binh_luan', false, true);
            $table->integer('ma_khach_hang', false, true);

            // $table->timestamps();

            $table->foreign('ma_san_pham')->references('ma_san_pham')->on('san_pham')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_chi_tiet_binh_luan')->references('ma_chi_tiet_binh_luan')->on('chi_tiet_binh_luan')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hang')
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
        Schema::dropIfExists('binh_luan');
    }
}
