<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\LoaiSanPhamModel;
use App\Models\ThuongHieuModel;
use App\Models\CuaHangModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loai_san_pham = LoaiSanPhamModel::select('ma_loai_san_pham', 'ten_loai_san_pham')->get();
        View::share('loai_san_pham', $loai_san_pham);

        $thuong_hieu = ThuongHieuModel::select('ma_thuong_hieu', 'ten_thuong_hieu', 'logo')
            ->where('trang_thai', 1)->get();
        View::share('thuong_hieu', $thuong_hieu);

        $cua_hang = CuaHangModel::where('id', 1)->first();
        View::share('cua_hang', $cua_hang);
    }
}
