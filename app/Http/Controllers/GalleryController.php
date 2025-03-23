<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    // Menampilkan semua gallery
    public function index()
    {
        $galleries = Gallery::all();
        return view('pages.admin.galleries.index', compact('galleries'));
    }

    // Menampilkan form tambah gallery
    public function create()
    {
        return view('pages.admin.galleries.create');
    }

    // Menyimpan gallery baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'upload_gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar
        $imagePath = $request->file('upload_gambar')->store('gallery_images', 'public');

        // Simpan ke database
        Gallery::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'upload_gambar' => $imagePath,
        ]);

        return redirect('/gallery')->with('success', 'Gallery berhasil ditambahkan!');
    }

    // Menampilkan detail gallery
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.admin.galleries.show', compact('gallery'));
    }

    // Menampilkan form edit gallery
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.admin.galleries.edit', compact('gallery'));
    }

    // Mengupdate gallery
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'upload_gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update data
        $gallery->judul = $request->judul;
        $gallery->deskripsi = $request->deskripsi;

        // Jika ada file gambar baru, upload
        if ($request->hasFile('upload_gambar')) {
            $imagePath = $request->file('upload_gambar')->store('gallery_images', 'public');
            $gallery->upload_gambar = $imagePath;
        }

        $gallery->save();

        return redirect('/gallery')->with('success', 'Gallery berhasil diperbarui!');
    }

    // Menghapus gallery
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect('/gallery')->with('success', 'Gallery berhasil dihapus!');
    }
}
