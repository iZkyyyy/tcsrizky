<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $angkatan = Angkatan::all();
        return view('admin.angkatan.angkatan', compact('angkatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.angkatan.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'angkatan' =>'required|max:4',
        'kodekelas'=>'required|unique:angkatans',
        'periode'=>'required',
        'mbdate'=>'required',
        ]);

        Angkatan::create($request->all());
        return redirect()->route('angkatans.index')->with('success', 'Angkatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Angkatan $angkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Angkatan $angkatan)
    {
        $angkatan = Angkatan::find($angkatan);
        return view('admin.angkatan.edit', compact('angkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Angkatan $angkatan)
    {
        $angkatan = Angkatan::find($angkatan);
        $angkatan -> angkatan=$request['angkatan'];
        $angkatan -> kodekelas=$request['kodekelas'];
        $angkatan -> periode=$request['periode'];
        $angkatan -> mbdate=$request['mbdate'];
        $angkatan->save();
        if ($angkatan){
            return redirect()->route('angkatans.index')->with('success', 'Angkatan berhasil diubah');
        } else {
            return redirect()->routeroute('angkatans.edit', $item->id)->with('error', 'Angkatan gagal diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Angkatan $angkatan)
    {
        //
    }
}
