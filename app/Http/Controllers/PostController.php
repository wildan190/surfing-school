<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Menampilkan semua post
    public function index()
    {
        $posts = Post::latest()->get();

        return view('pages.admin.posts.index', compact('posts'));
    }

    // Menampilkan form tambah post
    public function create()
    {
        return view('pages.admin.posts.create');
    }

    // Menyimpan post baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_post' => 'required|date',
            'tag' => 'nullable|string',
            'upload_gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'alt_gambar' => 'nullable|string|max:255',
            'konten' => 'required|string',
        ]);

        // Upload gambar
        $imagePath = $request->file('upload_gambar')->store('post_images', 'public');

        // Simpan ke database
        Post::create([
            'judul' => $request->judul,
            'tanggal_post' => $request->tanggal_post,
            'tag' => $request->tag,
            'slug' => Str::slug($request->judul),
            'upload_gambar' => $imagePath,
            'alt_gambar' => $request->alt_gambar,
            'konten' => $request->konten,
        ]);

        return redirect('/posts')->with('success', 'Post berhasil ditambahkan!');
    }

    // Menampilkan detail post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.admin.posts.show', compact('post'));
    }

    // Menampilkan form edit post
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.admin.posts.edit', compact('post'));
    }

    // Mengupdate post
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_post' => 'required|date',
            'tag' => 'nullable|string',
            'upload_gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'alt_gambar' => 'nullable|string|max:255',
            'konten' => 'required|string',
        ]);

        // Update data
        $post->judul = $request->judul;
        $post->tanggal_post = $request->tanggal_post;
        $post->tag = $request->tag;
        $post->slug = Str::slug($request->judul);
        $post->alt_gambar = $request->alt_gambar;
        $post->konten = $request->konten;

        // Jika ada file gambar baru, upload
        if ($request->hasFile('upload_gambar')) {
            $imagePath = $request->file('upload_gambar')->store('post_images', 'public');
            $post->upload_gambar = $imagePath;
        }

        $post->save();

        return redirect('/posts')->with('success', 'Post berhasil diperbarui!');
    }

    // Menghapus post
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect('/posts')->with('success', 'Post berhasil dihapus!');
    }
}
