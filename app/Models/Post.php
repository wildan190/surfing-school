<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'tanggal_post', 'tag', 'slug', 
        'upload_gambar', 'alt_gambar', 'konten'
    ];

    // Set slug otomatis saat membuat post
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->judul);
        });
    }
}
