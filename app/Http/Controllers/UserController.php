<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
        $user = User::all();
        return view('admin.user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $angkatan = Angkatan::all();
        return view('admin.user.create', compact('angkatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required | unique:users',
                'password' => 'required',
                'jeniskelamin' => 'required',
                'akses' => 'required',
                'alamat' => 'required',
                'tgllahir' => 'required',
                'foto' => 'required|mimes:png,jpg,jpeg,gif|image|max:5048',
            ],
            [
                'nama.required' => 'Nama Kosong',
                'email.required' => 'Email Kosong',
                'password.required' => 'Password Kosong',
                'jeniskelamin.required' => 'Jenis Kelamin Kosong',
                'akses.required' => 'Akses Kosong',
                'alamat.required' => 'Alamat Kosong',
                'tgllahir.required' => 'Tanggal Lahir Kosong',
                'foto.required' => 'Foto Kosong',
            ]
        );

        $path = $request->file('foto')->store('public/uploads');

        $user = new User;
        $user->nama = $request['nama'];
        $user->email = $request['email'];
        $user->password = Hash::make($request->password);
        $user->jeniskelamin = $request['jeniskelamin'];
        $user->akses = $request['akses'];
        $user->alamat = $request['alamat'];
        $user->tgllahir = $request['tgllahir'];
        $user->foto = basename($path);
        $user->angkatan_id = $request['angkatan_id'];
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $angkatan = Angkatan::all();
        return view('admin.user.edit', compact('user', 'angkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'jeniskelamin' => 'required',
                'akses' => 'required',
                'alamat' => 'required',
                'tgllahir' => 'required',
                'foto' => 'mimes:png,jpg,jpeg,gif|image|max:5048',
            ],
            [
                'nama.required' => 'Nama Kosong',
                'email.required' => 'Email Kosong',
                'jeniskelamin.required' => 'Jenis Kelamin Kosong',
                'akses.required' => 'Akses Kosong',
                'alamat.required' => 'Alamat Kosong',
                'tgllahir.required' => 'Tanggal Lahir Kosong',
            ]
        );

        if ($request->file('foto')) {
            if ($request->foto_lama) {
                Storage::delete($request->foto_lama);
            }
            $path = $request->file('foto')->store('public/uploads');
        } else {
            $path = $request->foto_lama;
        }

        $user = User::find($id);
        $user->nama = $request['nama'];
        $user->email = $request['email'];
        $user->jeniskelamin = $request['jeniskelamin'];
        $user->akses = $request['akses'];
        $user->alamat = $request['alamat'];
        $user->tgllahir = $request['tgllahir'];
        $user->foto = basename($path);
        $user->angkatan_id = $request['angkatan_id'];
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user->foto) {
            Storage::delete('storage/uploads/' . $user->foto);
        }
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil Dihapus');
    }
}
