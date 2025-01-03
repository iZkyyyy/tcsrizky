<?php

namespace App\Http\Controllers;

use App\Models\DataMateri;
use App\Models\SoalSiswa;
use Illuminate\Http\Request;

class SoalSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Soalsiswa = SoalSiswa::all();
        return view('admin.soal.soal', compact('Soalsiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataMateri = DataMateri::all();
        return view('admin.soal.insert', compact('DataMateri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'materi_siswa_id' => 'required',
            'kisikisi' => 'required',
        ]);

        $Soalsiswa = new SoalSiswa;
        $Soalsiswa->data_materi_id = $request['materi_siswa_id'];
        $Soalsiswa->kisikisi = $request['kisikisi'];
        $Soalsiswa->save();

        return redirect()->route('soals.index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $SoalSiswa = SoalSiswa::findOrFail($id);
        return view('admin.soal.detail', compact('SoalSiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Soalsiswa = SoalSiswa::find($id);
        $DataMateri = DataMateri::all();
        return view('admin.soal.edit', compact('Soalsiswa', 'DataMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Soalsiswa = SoalSiswa::find($id);
        $Soalsiswa->data_materi_id = $request['materi_siswa_id'];
        $Soalsiswa->kisikisi = $request['kisikisi'];
        $Soalsiswa->save();

        return redirect()->route('soals.index')->with('success', 'User berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Soalsiswa = SoalSiswa::destroy($id);
        return redirect()->route('soals.index')->with('success', 'User berhasil Dihapus');
    }
}
