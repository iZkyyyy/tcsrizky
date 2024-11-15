<?php

namespace App\Http\Controllers;

use App\Models\DataMateri;
use Illuminate\Http\Request;

class DataMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataMateri = DataMateri::all();
        return view('admin.materi.materi', compact('DataMateri'));
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
        $request->validate(
            [
                'namamateri' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'namamateri.required'=>'Nama Kosong',
                'deskripsi.required'=>'Deskripsi Kosong',
            ]
        );
        DataMateri::create($request->all());
        return redirect()->route('dmateris.index')->with('success', 'Angkatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataMateri $dataMateri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataMateri $dataMateri)
    {
        $DataMateri= DataMateri::find($dataMateri);
        return view('admin.materi.edit', compact('DataMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataMateri $dataMateri)
    {
        $request->validate(
            [
                'namamateri' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'namamateri.required' => 'Nama Kosong',
                'deskripsi.required' => 'Deskripsi Kosong',
            ]
        );

        $dataMateri->update($request->all());
        return redirect()->route('dmateris.index')->with('success', 'Angkatan berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataMateri $dataMateri)
    {
        //
    }
}
