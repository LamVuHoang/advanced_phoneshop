<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use App\Models\SanPhamModel;
use App\Models\TinTucModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = BannerModel::select('hinh_banner', 'url')->get();
        $random_news = $this->pick_random_news();
        $sale_products = $this->pick_random_products('ma_giam_gia', '!=', 'null');
        $android_products = $this->pick_random_products('he_dieu_hanh', 'like', '%android%');

        return view('Ogani.HomePage', [
            'banner' => $banner,
            'random_news' => $random_news,
            'sale_products' => $sale_products,
            'android_products' => $android_products,
        ]);
    }

    public function pick_random_news()
    {
        $all_id = TinTucModel::orderBy('created_at', 'desc')->pluck('id')->toArray();
        $random_indexes = array_rand($all_id, 3);
        $random_news = [];
        foreach ($random_indexes as $index) {
            array_push(
                $random_news,
                TinTucModel::select('id', 'tieu_de', 'tom_tat', 'hinh', 'created_at')
                    ->where('id', $all_id[$index])->first()
            );
        }

        return $random_news;
    }

    public function pick_random_products($column_name, $comparisan, $value)
    {
        $all_id = SanPhamModel::where($column_name, $comparisan, $value)->pluck('ma_san_pham')->toArray();
        $random_indexes = array_rand($all_id, 6);
        $new_random_indexes = array_chunk($random_indexes, 3);

        $random_products = [];

        foreach ($new_random_indexes as $key) {
            $module = [];
            foreach ($key as $index) {
                array_push(
                    $module,
                    SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
                        ->where('ma_san_pham', $all_id[$index])->first()
                );
            }
            array_push($random_products, $module);
        }

        return $random_products;
    }
}
