<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MouItem extends Model
{
    use HasFactory;

    protected $fillable = ['mou_id', 'category', 'nama_hotel', 'jumlah_siswa', 'alamat_hotel'];

    public function mou()
    {
        return $this->belongsTo(MoU::class, 'mou_id');
    }
}
