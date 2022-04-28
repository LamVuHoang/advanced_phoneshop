<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTucModel extends Model
{
    use HasFactory;
    protected $table = 'tin_tuc';

    public function user()
    {
        return $this->belongsTo(User::class, 'ma_nhan_vien_dang_bai', 'id');
    }
}
