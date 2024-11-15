<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Angkatan;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        return view('admin.user.create',compact('angkatan'));
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
                'nama.required'=>'Nama Kosong',
                'email.required'=>'Email Kosong',
                'password.required'=>'Password Kosong',
                'jeniskelamin.required'=>'Jenis Kelamin Kosong',
                'akses.required' => 'Akses Kosong',
                'alamat.required' => 'Alamat Kosong',
                'tgllahir.required' => 'Tanggal Lahir Kosong',
                'foto.required' => 'Foto Kosong',
            ]
        );

        $file = $request->file('foto');
        $path = $file->storeAs('uploads',time() . '.' . $request->file('foto')->extension());


        $user = new User;
        $user-> nama=$request ['nama'];
        $user-> email=$request ['email'];
        $user-> password=$request ['password'];
        $user-> jeniskelamin=$request ['jeniskelamin'];
        $user-> akses=$request ['akses'];
        $user-> alamat=$request ['alamat'];
        $user-> tgllahir=$request['tgllahir'];
        $user-> foto=$path;
        $user-> angkatan_id=$request['angkatan_id'];
        $user-> save();

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
        $user= User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
                'nama.required'=>'Nama Kosong',
                'email.required'=>'Email Kosong',
                'password.required'=>'Password Kosong',
                'jeniskelamin.required'=>'Jenis Kelamin Kosong',
                'akses.required' => 'Akses Kosong',
                'alamat.required' => 'Alamat Kosong',
                'tgllahir.required' => 'Tanggal Lahir Kosong',
                'foto.required' => 'Foto Kosong',
            ]
        );

        $file = $request->file('foto');
        $path = $file->storeAs('uploads',time() . '.' . $request->file('foto')->extension());


        $user = User::find($id);
        $user-> nama=$request ['nama'];
        $user-> email=$request ['email'];
        $user-> password=$request ['password'];
        $user-> jeniskelamin=$request ['jeniskelamin'];
        $user-> akses=$request ['akses'];
        $user-> alamat=$request ['alamat'];
        $user-> tgllahir=['tgllahir'];
        $user-> foto=$path;
        $user-> angkatan=$request['angkatan'];
        $user-> save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy('id',$id);
        return redirect('/user');
    }
}
