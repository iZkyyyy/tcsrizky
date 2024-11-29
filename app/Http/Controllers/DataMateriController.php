<?php

namespace App\Http\Controllers;

use App\Models\DataMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
                'file' => 'required',
                'namamateri' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'file.required'=>'file Kosong',
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
    public function edit(string $id)
    {
        $DataMateri = DataMateri::find($id);
        return view('admin.materi.edit', compact('DataMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'file' => 'required',
                'namamateri' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'file.required' => 'file Kosong',
                'namamateri.required' => 'Nama Kosong',
                'deskripsi.required' => 'Deskripsi Kosong',
            ]
        );

        $DataMateri = DataMateri::find($id);
        $DataMateri->update($request->all());
        return redirect()->route('dmateris.index')->with('success', 'Angkatan berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataMateri = DataMateri::findOrFail($id);
        if ($DataMateri->namamateri) {
            Storage::delete('storage/uploads/' . $DataMateri->namamateri);
        }
        $DataMateri->delete();

        return redirect()->route('dmateris.index')->with('success', 'User berhasil Dihapus');
    }
}
