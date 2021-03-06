<?php

namespace App\Http\Controllers;

use App\Models\SanPhamModel;
use App\Models\ThuongHieuModel;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function chi_tiet(int $ma_thuong_hieu)
    {
        $title = ThuongHieuModel::where('ma_thuong_hieu', $ma_thuong_hieu)->value('ten_thuong_hieu');

        $latest_products = SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
            ->orderBy('created_at', 'desc')->take(6)->get()->toArray();
        $sorted_latest_products = array_chunk($latest_products, 3);

        $products = SanPhamModel::select('ma_san_pham', 'ma_giam_gia', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
            ->where('ma_thuong_hieu', $ma_thuong_hieu);
        $product_count = $products->count();
        $paginated_products = $products->paginate(6);

        return view('Ogani.ShopGrid', [
            'title' => $title,
            'products' => $paginated_products,
            'product_count' => $product_count,
            'latest_products' => $sorted_latest_products,
            'data_max' => SanPhamModel::max('don_gia'),
            'data_min' => SanPhamModel::min('don_gia'),
        ]);
    }
}
