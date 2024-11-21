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
        $Angkatan = Angkatan::all();
        return view('admin.angkatan.angkatan', compact('Angkatan'));
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
    public function edit(string $id)
    {
        $Angkatan = Angkatan::find($id);
        return view('admin.angkatan.edit', compact('Angkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Angkatan = Angkatan::find($id);
        $Angkatan -> angkatan=$request['angkatan'];
        $Angkatan -> kodekelas=$request['kodekelas'];
        $Angkatan -> periode=$request['periode'];
        $Angkatan -> mbdate=$request['mbdate'];
        $Angkatan->save();
        if ($Angkatan){
            return redirect()->route('angkatans.index')->with('success', 'Angkatan berhasil diubah');
        } else {
            return redirect()->routeroute('angkatans.edit', $item->id)->with('error', 'Angkatan gagal diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Angkatan = Angkatan::destroy($id);

        return redirect()->route('angkatans.index')->with('success', 'User berhasil Dihapus');
    }
}
