<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPhamModel;

class TimKiemController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->to("tim-kiem/san-pham/$request->keyword");
    }

    public function tim_ten_san_pham(string $keyword)
    {
        $title = $keyword;

        $latest_products = SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
        ->orderBy('created_at', 'desc')->take(6)->get()->toArray();
        $sorted_latest_products = array_chunk($latest_products, 3);

        $products = SanPhamModel::select('ma_san_pham', 'ma_giam_gia', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
        ->where('ten_san_pham', 'like', "%$keyword%")->orWhere('chi_tiet_san_pham', 'like', "%$keyword%");
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
