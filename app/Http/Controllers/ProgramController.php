<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // Menampilkan daftar program
    public function index()
    {
        $programs = Program::all();

        return view('pages.admin.programs.index', compact('programs'));
    }

    // Menampilkan form tambah program
    public function create()
    {
        return view('pages.admin.programs.create');
    }

    // Menyimpan program baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Program::create($request->all());

        return redirect('/admin/programs')->with('success', 'Program berhasil ditambahkan!');
    }

    // Menampilkan detail program
    public function show($id)
    {
        $program = Program::findOrFail($id);

        return view('pages.admin.programs.show', compact('program'));
    }

    // Menampilkan form edit program
    public function edit($id)
    {
        $program = Program::findOrFail($id);

        return view('pages.admin.programs.edit', compact('program'));
    }

    // Mengupdate program
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $program = Program::findOrFail($id);
        $program->update($request->all());

        return redirect('/admin/programs')->with('success', 'Program berhasil diperbarui!');
    }

    // Menghapus program
    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect('/admin/programs')->with('success', 'Program berhasil dihapus!');
    }
}
