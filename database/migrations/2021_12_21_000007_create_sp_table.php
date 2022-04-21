<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->integer('ma_san_pham', true, true);
            $table->string('ten_san_pham', 100);
            $table->string('ten_url', 120);
            $table->tinyInteger('ma_thuong_hieu', false, true);
            $table->string('hinh1', 255);
            $table->string('hinh2', 255)->nullable();
            $table->string('hinh3', 255)->nullable();
            $table->string('he_dieu_hanh', 100)->nullable();
            $table->string('sim', 100)->nullable();
            $table->tinyInteger('ram', false, true)->nullable();
            $table->integer('bo_nho_trong', false, true)->nullable();
            $table->string('chip', 100)->nullable();
            $table->string('camera_truoc', 50)->nullable();
            $table->string('camera_sau', 100)->nullable();
            $table->string('man_hinh', 100)->nullable();
            $table->tinyInteger('ma_loai_san_pham', false, true);
            $table->integer('don_gia', false, true);
            $table->integer('ma_giam_gia', false, true)->nullable();
            $table->integer('so_luong_ton', false, true);
            $table->string('san_pham_kem_theo', 100)->nullable();
            $table->string('ghi_chu', 255)->nullable();
            $table->boolean('trang_thai')->default(1);
            $table->string('tom_tat_san_pham', 500)->nullable();
            $table->text('chi_tiet_san_pham');
            $table->bigInteger('ma_nguoi_dang_bai', false, true);

            $table->timestamps();

            $table->foreign('ma_thuong_hieu')->references('ma_thuong_hieu')->on('thuong_hieu')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_loai_san_pham')->references('ma_loai_san_pham')->on('loai_san_pham')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_nguoi_dang_bai')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_giam_gia')->references('ma_giam_gia')->on('giam_gia')
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
        Schema::dropIfExists('san_pham');
    }
}
