<?php

namespace App\Http\Controllers;

use App\Models\KumpulSiswa;
use Illuminate\Http\Request;

class KumpulSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kumpul = KumpulSiswa::all();
        return view('siswa.kumpul.kumpul', compact('kumpul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.kumpul.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kumpul = new KumpulSiswa;
        $kumpul-> tugas=$request ['tugas'];
        $kumpul -> save();

        if($kumpul){
            return redirect('/kumpul')->with('status', 'Data Telah ditambahkan');
        } else {
            return redirect('/tambah2')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KumpulSiswa $kumpulSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KumpulSiswa $kumpulSiswa)
    {
        $kumpul = KumpulSiswa::find($id);
        return view('siswa.kumpul.edit', compact('kumpul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KumpulSiswa $kumpulSiswa)
    {
        $kumpul = KumpulSiswa::find($id);
        $kumpul-> tugas=$request ['tugas'];
        $kumpul -> save();

        return redirect('/kumpul');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KumpulSiswa $kumpulSiswa)
    {
        KumpulSiswa::destroy('id',$id);
        return redirect('/kumpul');
    }
}
