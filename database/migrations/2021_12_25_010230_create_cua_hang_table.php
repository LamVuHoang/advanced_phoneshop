<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuaHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cua_hang', function (Blueprint $table) {
            $table->tinyInteger('id', true, true);
            $table->string('ten_cua_hang', 100);
            $table->string('dia_chi', 255);
            $table->string('dien_thoai', 255);
            $table->string('email', 50);
            $table->string('facebook_url', 100);
            $table->string('twitter_url', 100);
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
        Schema::dropIfExists('cua_hang');
    }
}
