<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\TimKiemController;
use App\Http\Controllers\TinTucController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('san-pham')->group(function () {
    Route::get('/', [SanPhamController::class, 'index']);
    Route::get('chi-tiet/{ten_url}', [SanPhamController::class, 'chi_tiet'])->where('ten_url', '[a-zA-Z0-9-]+');
});

Route::prefix('thuong-hieu')->group(function () {
    Route::get('chi-tiet/{ma_thuong_hieu}', [ThuongHieuController::class, 'chi_tiet'])
        ->where('ma_thuong_hieu', '[0-9]+');
});

Route::prefix('tin-tuc')->group(function () {
    Route::get('/', [TinTucController::class, 'index']);
    Route::get('chi-tiet/{id}', [TinTucController::class, 'chi_tiet'])->where('id', '[0-9]+');
});

Route::prefix('tim-kiem')->group(function () {
    Route::post('/', [TimKiemController::class, 'index']);
    Route::get('san-pham/{key_word}', [TimKiemController::class, 'tim_ten_san_pham'])
        ->where('keyword', '[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u');
});

Route::get('lien-he', [ContactController::class, 'index']);

Route::get('admin', function () {
    return view('GentelellaMaster');
});
