<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_binh_luan', function (Blueprint $table) {
            $table->integer('ma_chi_tiet_binh_luan', true, true);
            $table->tinyInteger('danh_gia_sao', false, true);
            $table->string('tieu_de', 200)->nullable();
            $table->text('loi_binh_luan');
            $table->string('hinh_anh', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_binh_luan');
    }
}
