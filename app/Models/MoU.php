<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoU extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];

    protected $fillable = ['judul', 'fileMoU', 'denganPihak', 'waktuMulai', 'waktuSelesai', 'textMoU', 'status'];

    public function signatures()
    {
        return $this->hasMany(Signature::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relasi dengan MoUItem
    public function items()
    {
        return $this->hasMany(MoUItem::class, 'mou_id');
    }

    // public function kerjasama()
    // {
    //     return $this->belongsTo(Kerjasama::class);
    // }

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('pihakPertama', 'like', '%' . $search . '%')->orWhere('pihakKedua', 'like', '%' . $search . '%')->orWhere('waktu', 'like', '%' . $search . '%');
    //     });
    //     $query->when($filters['kerjasama'] ?? false, function ($query, $kerjasama) {
    //         return $query->whereHas('kerjasama', function ($query) use ($kerjasama) {
    //             $query->where('id', $kerjasama);
    //         });
    //     });
    // }
}
