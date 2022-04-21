<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GiamGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giam_gia', function (Blueprint $table) {
            $table->integer('ma_giam_gia', true, true);
            $table->string('code_giam_gia', 20)->nullable();
            $table->integer('so_tien_giam_gia', false, true);
            $table->boolean('trang_thai');
            $table->dateTime('thoi_gian_bat_dau');
            $table->dateTime('thoi_gian_ket_thuc');
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
        Schema::dropIfExists('giam_gia');
    }
}
