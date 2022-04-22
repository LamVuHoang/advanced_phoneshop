<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanPhamController;
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

Route::prefix('san-pham')->group(function() {
    Route::get('/', [SanPhamController::class, 'index']);
    Route::get('chi-tiet/{ten_url}', [SanPhamController::class, 'chi_tiet'])->where('ten_url', '[a-zA-Z0-9-]+');
});

Route::get('admin', function () {
    return view('GentelellaMaster');
});