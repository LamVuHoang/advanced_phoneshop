<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiamGiaModel extends Model
{
    use HasFactory;
    protected $table = 'giam_gia';
    protected $primaryKey = 'ma_giam_gia';

    public function san_pham()
    {
        return $this->hasMany(SanPhamModel::class, 'ma_san_pham');
    }
}
