<?php

namespace App\Http\Controllers;

use App\Models\SanPhamModel;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function index()
    {
        

        return 'quan_thu';
    }

    public function chi_tiet(string $ten_url)
    {
        $product = SanPhamModel::where('ten_url', $ten_url)
        ->with(['thuong_hieu'])->first();

        return view('Ogani.SingleProduct', [
            'product' => $product,
        ]);
    }
}
