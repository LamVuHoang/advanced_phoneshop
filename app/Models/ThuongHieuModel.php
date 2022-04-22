<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieuModel extends Model
{
    use HasFactory;
    protected $table = 'thuong_hieu';
    protected $primaryKey = 'ma_thuong_hieu';

    public function san_pham()
    {
        return $this->hasMany(SanPhamModel::class, 'ma_san_pham');
    }
}
