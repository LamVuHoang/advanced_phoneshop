<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('tieu_de', 100);
            $table->string('tom_tat', 500);
            $table->text('chi_tiet');
            $table->bigInteger('ma_nhan_vien_dang_bai', false, true);
            $table->string('hinh', 255);
            $table->boolean('trang_thai');
            $table->timestamps();

            $table->foreign('ma_nhan_vien_dang_bai')->references('id')->on('users')
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
        Schema::dropIfExists('tin_tuc');
    }
}
