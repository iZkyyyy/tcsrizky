<?php

namespace App\Http\Controllers;

use App\Models\SoalSiswa;
use Illuminate\Http\Request;

class SoalSiswaController extends Controller
{
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
        return view('admin.soal.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Soalsiswa = new SoalSiswa();
        $Soalsiswa->soal=$request ['soal'];
        $Soalsiswa -> save();

        if($Soalsiswa){
            return redirect('/soal')->with('status', 'Data Telah ditambahkan');
        } else {
            return redirect('/tambah1')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SoalSiswa $soalSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoalSiswa $soalSiswa)
    {
        $Soalsiswa = SoalSiswa::find($id);
        return view('admin.soal.edit', compact('soalSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoalSiswa $soalSiswa)
    {
        $Soalsiswa = SoalSiswa::find($id);
        $Soalsiswa->soal=$request ['soal'];
        $Soalsiswa -> save();

        return redirect('/soal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoalSiswa $soalSiswa)
    {
        SoalSiswa::destroy($id);
        return redirect('/soal');
    }
}
