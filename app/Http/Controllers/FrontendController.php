<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\PaketEdukasi;
use App\Models\Post;
use App\Models\Program;
use App\Models\Testimoni;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(3)->get(); // Ambil 3 berita terbaru
        $programs = Program::all();
        $galleries = Gallery::latest()->take(6)->get();
        $paketEdukasi = PaketEdukasi::all();
        $testimonis = Testimoni::latest()->take(5)->get();

        return view('pages.web.index', compact('posts', 'programs', 'galleries', 'paketEdukasi', 'testimonis'));
    }

    public function post($tag)
    {
        // Ambil post berdasarkan tag (gunakan first() agar hanya satu post yang ditampilkan)
        $post = Post::where('tag', $tag)->firstOrFail();

        return view('pages.web.show', compact('post'));
    }
}
