<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaketEdukasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_paket',
        'nama_paket',
        'durasi',
        'pertemuan',
        'deskripsi',
        'upload_gambar',
        'harga',
    ];

    // Auto-generate kode_paket saat membuat paket baru
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paket) {
            $paket->kode_paket = 'PE-' . strtoupper(Str::random(6));
        });
    }
}
