<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    protected $primaryKey = 'ma_san_pham';

    public function thuong_hieu()
    {
        return $this->belongsTo(ThuongHieuModel::class, 'ma_thuong_hieu');
    }
}
