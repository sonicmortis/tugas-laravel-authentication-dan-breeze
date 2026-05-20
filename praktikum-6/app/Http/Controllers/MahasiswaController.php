<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * index - Menampilkan semua data mahasiswa
     */
    public function index()
    {
        // Ambil semua data mahasiswa dari database
        $mahasiswas = Mahasiswa::all();
        
        // Tampilkan ke view index.blade.php
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    /**
     * create - Menampilkan form tambah data mahasiswa
     */
    public function create()
    {
        // Tampilkan form create.blade.php
        return view('mahasiswas.create');
    }

    /**
     * store - Menyimpan data mahasiswa baru ke database
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nim' => 'required|unique:mahasiswas|max:20',
            'nama' => 'required|max:100',
            'jurusan' => 'required|max:50',
            'angkatan' => 'required|max:4',
            'alamat' => 'nullable',
        ]);

        // Simpan data ke database
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * show - Menampilkan detail satu mahasiswa
     */
    public function show($id)
    {
        // Cari data mahasiswa berdasarkan id
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Tampilkan view show.blade.php
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    /**
     * edit - Menampilkan form edit data mahasiswa
     */
    public function edit($id)
    {
        // Cari data mahasiswa berdasarkan id
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Tampilkan view edit.blade.php
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    /**
     * update - Mengupdate data mahasiswa yang sudah ada
     */
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nim' => 'required|max:20|unique:mahasiswas,nim,' . $id,
            'nama' => 'required|max:100',
            'jurusan' => 'required|max:50',
            'angkatan' => 'required|max:4',
            'alamat' => 'nullable',
        ]);

        // Cari data mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Update data
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil diupdate!');
    }

    /**
     * destroy - Menghapus data mahasiswa
     */
    public function destroy($id)
    {
        // Cari data mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Hapus data
        $mahasiswa->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}