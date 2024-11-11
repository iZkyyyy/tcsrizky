<?php

namespace App\Http\Controllers;

use App\Models\MateriSiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = MateriSiswa::all();
        return view('admin.materi.materi', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.materi.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materi = new MateriSiswa;
        $materi-> word=$request ['word'];
        $materi -> save();

        if($materi){
            return redirect('/materi')->with('status', 'Data Telah ditambahkan');
        } else {
            return redirect('/tambah')->with('status', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriSiswa $materiSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriSiswa $materiSiswa)
    {
        $materi = MateriSiswa::find($id);
        return view('admin.materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriSiswa $materiSiswa)
    {
        $materi = MateriSiswa::find($id);
        $materi-> word=$request ['word'];
        $materi -> save();

        return redirect('/materi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriSiswa $materiSiswa)
    {
        MateriSiswa::destroy('id',$id);
        return redirect('/materi');
    }
}
