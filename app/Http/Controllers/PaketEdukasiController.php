<?php

namespace App\Http\Controllers;

use App\Models\PaketEdukasi;
use Illuminate\Http\Request;

class PaketEdukasiController extends Controller
{
    // Menampilkan daftar paket edukasi
    public function index()
    {
        $paketEdukasis = PaketEdukasi::all();

        return view('pages.admin.paket-edukasi.index', compact('paketEdukasis'));
    }

    // Menampilkan form tambah paket edukasi
    public function create()
    {
        return view('pages.admin.paket-edukasi.create');
    }

    // Menyimpan paket edukasi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'pertemuan' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'upload_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Jika ada gambar yang diupload
        if ($request->hasFile('upload_gambar')) {
            $imagePath = $request->file('upload_gambar')->store('paket_edukasi', 'public');
            $data['upload_gambar'] = $imagePath;
        }

        PaketEdukasi::create($data);

        return redirect('/admin/paket-edukasi')->with('success', 'Paket edukasi berhasil ditambahkan!');
    }

    // Menampilkan detail paket edukasi
    public function show($id)
    {
        $paketEdukasi = PaketEdukasi::findOrFail($id);

        return view('pages.admin.paket-edukasi.show', compact('paketEdukasi'));
    }

    // Menampilkan form edit paket edukasi
    public function edit($id)
    {
        $paketEdukasi = PaketEdukasi::findOrFail($id);

        return view('pages.admin.paket-edukasi.edit', compact('paketEdukasi'));
    }

    // Mengupdate paket edukasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'pertemuan' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'upload_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Jika ada gambar yang diupload
        if ($request->hasFile('upload_gambar')) {
            $imagePath = $request->file('upload_gambar')->store('paket_edukasi', 'public');
            $data['upload_gambar'] = $imagePath;
        }

        $paketEdukasi = PaketEdukasi::findOrFail($id);
        $paketEdukasi->update($data);

        return redirect('/admin/paket-edukasi')->with('success', 'Paket edukasi berhasil diperbarui!');
    }

    // Menghapus paket edukasi
    public function destroy($id)
    {
        $paketEdukasi = PaketEdukasi::findOrFail($id);
        $paketEdukasi->delete();

        return redirect('/admin/paket-edukasi')->with('success', 'Paket edukasi berhasil dihapus!');
    }
}
