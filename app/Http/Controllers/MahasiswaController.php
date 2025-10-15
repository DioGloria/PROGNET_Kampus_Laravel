<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
        ]);

        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $m = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('m'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil dihapus!');
    }

}
