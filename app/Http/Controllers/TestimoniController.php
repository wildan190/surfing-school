<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Menampilkan daftar testimoni
    public function index()
    {
        $testimonis = Testimoni::all();

        return view('pages.admin.testimoni.index', compact('testimonis'));
    }

    // Menampilkan form tambah testimoni
    public function create()
    {
        return view('pages.admin.testimoni.create');
    }

    // Menyimpan testimoni baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_kota' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'nullable|string',
        ]);

        Testimoni::create($request->all());

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    // Menampilkan detail testimoni
    public function show($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        return view('pages.admin.testimoni.show', compact('testimoni'));
    }

    // Menampilkan form edit testimoni
    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        return view('pages.admin.testimoni.edit', compact('testimoni'));
    }

    // Update testimoni
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_kota' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'nullable|string',
        ]);

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->update($request->all());

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui!');
    }

    // Hapus testimoni
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
