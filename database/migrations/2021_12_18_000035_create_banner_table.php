<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('hinh_banner', 255);
            $table->string('dong1', 255)->nullable();
            $table->string('dong2', 255)->nullable();
            $table->string('dong3', 255)->nullable();
            $table->integer('vi_tri', false, false);
            $table->string('url', 255);
            $table->boolean('trang_thai');
            $table->string('ghi_chu', 255);
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
        Schema::dropIfExists('banner');
    }
}
