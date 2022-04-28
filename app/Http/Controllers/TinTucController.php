<?php

namespace App\Http\Controllers;

use App\Models\TinTucModel;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function index()
    {
        $recent_news = TinTucModel::select('id', 'tieu_de', 'hinh', 'created_at')
        ->orderBy('created_at', 'desc')->take(3)->get();
        $tin_tuc = TinTucModel::select('id', 'tieu_de', 'tom_tat', 'hinh', 'created_at')->paginate(6);
        return view('Ogani.Blog', [
            'tin_tuc' => $tin_tuc,
            'recent_news' => $recent_news,
        ]);
    }

    public function chi_tiet(int $id)
    {
        $recent_news = TinTucModel::select('id', 'tieu_de', 'hinh', 'created_at')->where('id', '!=', $id)
        ->orderBy('created_at', 'desc')->take(3)->get();
        $random_news = $this->pick_random_news();
        $tin_tuc = TinTucModel::where('id', $id)
        ->with(['user'])->first();

        return view('Ogani.BlogDetail', [
            'tin_tuc' => $tin_tuc,
            'random_news' => $random_news,
            'recent_news' => $recent_news,
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
}
