@extends('layout.app')
@section('title')
    Kisi-Kisi Soal
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">UPLOAD DATA</div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('users.update', $user->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div>
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" id="nama" name="nama" placeholder="INPUT NAMA ANGGOTA"
                                    class="form-control" value="{{ $user->nama }}">
                                <div style="color: red">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email" name="email" placeholder="INPUT EMAIL ANGGOTA"
                                    class="form-control" value="{{ $user->email }}">
                                <div style="color: red">
                                    @error('email ')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <select id="jeniskelamin" name="jeniskelamin" class="form-control">
                                    @if ($user->jeniskelamin == 'Laki-Laki')
                                        <option value="{{ $user->jeniskelamin }}">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    @elseif($user->jeniskelamin == 'Perempuan')
                                        <option value="{{ $user->jeniskelamin }}">Perempuan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    @endif
                                </select>
                            </div>
                            <div>
                                <label for="akses" class="form-label">Akses</label>
                                <select id="akses" name="akses" class="form-control">
                                    @if ($user->akses == 'admin')
                                        <option value="{{ $user->akses }}">Admin</option>
                                        <option value="siswa">Siswa</option>
                                        <option value="instruktur">Instruktur</option>
                                        <option value="pimpinan">Pimpinan</option>
                                    @elseif ($user->akses == 'siswa')
                                        <option value="{{ $user->akses }}">Siswa</option>
                                        <option value="admin">Admin</option>
                                        <option value="instruktur">Instruktur</option>
                                        <option value="pimpinan">Pimpinan</option>
                                    @elseif($user->akses == 'instruktur')
                                        <option value="{{ $user->akses }}">Instruktur</option>
                                        <option value="admin">Admin</option>
                                        <option value="siswa">siswa</option>
                                        <option value="pimpinan">Pimpinan</option>
                                    @else
                                        <option value="{{ $user->akses }}">Pimpinan</option>
                                        <option value="admin">Admin</option>
                                        <option value="siswa">siswa</option>
                                        <option value="instruktur">instruktur</option>
                                    @endif
                                </select>
                            </div>
                            <div>
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="2" class="form-control">{{ $user->alamat }}</textarea>
                                <div style="color: red">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="tgllahir" name="tgllahir"
                                    placeholder="INPUT TANGGAL LAHIR ANGGOTA" class="form-control"
                                    value="{{ $user->tgllahir }}">
                                <div style="color: red">
                                    @error('tgllahir')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="foto" class="form-label">Foto</label>
                                <input type="hidden" name="foto_lama" value="{{ $user->foto }}">
                                <input type="file" id="foto" name="foto" placeholder="foto" class="form-control">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                            @if ($user->akses == 'siswa')
                                <div>
                                    <label for="angkatan_id" class="form-label">Angkatan</label>
                                    <select id="angkatan_id" name="angkatan_id" class="form-control">
                                        @if ($user->angkatan_id == $user->angkatan_id)
                                            <option value="{{ $user->angkatan_id }}">{{ $user->angkatan->angkatan }}
                                            </option>
                                            @foreach ($angkatan as $agkt)
                                                <option value="{{ $agkt->id }}">{{ $agkt->angkatan }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div style="color:red">
                                        @error('angkatan_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <input type="hidden" name="angkatan_id" value="0">
                            @endif
                            <div>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
