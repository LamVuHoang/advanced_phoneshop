<?php

namespace App\Http\Controllers;

use App\Models\SanPhamModel;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index()
    {
        $latest_products = SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
        ->orderBy('created_at', 'desc')->take(6)->get()->toArray();
        $sorted_latest_products = array_chunk($latest_products, 3);

        $sale_products = SanPhamModel::select('ma_san_pham', 'ma_giam_gia', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
        ->with(['giam_gia'])->where('ma_giam_gia', '!=', null)->get();

        $products = SanPhamModel::select('ma_san_pham', 'ma_giam_gia', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
        ->where('ma_giam_gia', null);
        $product_count = $products->count();
        $paginated_products = $products->paginate(6);

        return view('Ogani.ShopGrid', [
            'sale_products' => $sale_products,
            'products' => $paginated_products,
            'product_count' => $product_count,
            'latest_products' => $sorted_latest_products,
        ]);
    }

    public function chi_tiet(string $ten_url)
    {
        $product = SanPhamModel::where('ten_url', $ten_url)
            ->with(['thuong_hieu'])->first();
        $related_products = $this->pick_random_related_products('ma_thuong_hieu', '=', $product->ma_thuong_hieu);

        return view('Ogani.SingleProduct', [
            'product' => $product,
            'related_products' => $related_products,
        ]);
    }

    public function pick_random_related_products($column_name, $comparisan, $value)
    {
        $query = SanPhamModel::where($column_name, $comparisan, $value);
        $count = $query->select('ma_san_pham')->count();

        if ($count > 0) {
            if ($count <= 50) {
                $all_id = $query->pluck('ma_san_pham')->toArray();
            } else {
                $all_id = $query->take(50)->pluck('ma_san_pham')->toArray();
            }

            if ($count > 6) {
                $random_indexes = array_rand($all_id, 6);
            } else {
                $random_indexes = $all_id;
            }

            $random_products = [];

            if ($count > 6) {
                foreach ($random_indexes as $key) {
                    array_push(
                        $random_products,
                        SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
                            ->where('ma_san_pham', $all_id[$key])->first()
                    );
                }
            } else {
                foreach ($random_indexes as $key) {
                    array_push(
                        $random_products,
                        SanPhamModel::select('ma_san_pham', 'ten_url', 'ten_san_pham', 'hinh1', 'don_gia')
                            ->where('ma_san_pham', $key)->first()
                    );
                }
            }
            return $random_products;
        }

        return [];
    }
}
