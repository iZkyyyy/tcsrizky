@extends('layout.instruktur')
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
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ $user->nama }}">
                                <div style="color: red">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    value="{{ $user->email }}">
                                <div style="color: red">
                                    @error('email ')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <select id="jeniskelamin" name="jeniskelamin" class="form-control"
                                    value="{{ old('jeniskelamin') }}">
                                    @if ($user->jeniskelamin == 'Laki-Laki')
                                        <option value="{{ $user->jeniskelamin }}">{{ $user->jeniskelamin }}</option>
                                        <option value="Perempuan">Perempuan</option>
                                    @else
                                        <option value="{{ $user->jeniskelamin }}">{{ $user->jeniskelamin }}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                    @endif
                                </select>
                                <div style="color:red">
                                    @error('jeniskelamin')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="akses" class="form-label">Akses</label>
                                <select id="akses" name="akses" class="form-control" value="{{ old('akses') }}">
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
                                    @elseif ($user->akses == 'instruktur')
                                        <option value="{{ $user->akses }}">Instruktur</option>
                                        <option value="admin">Admin</option>
                                        <option value="siswa">Siswa</option>
                                        <option value="pimpinan">Pimpinan</option>
                                    @else
                                        <option value="{{ $user->akses }}">Pimpinan</option>
                                        <option value="admin">Admin</option>
                                        <option value="siswa">Siswa</option>
                                        <option value="instruktur">Instruktur</option>
                                    @endif
                                </select>
                                <div style="color:red">
                                    @error('akses')
                                        {{ $message }}
                                    @enderror
                                </div>
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
                                <input type="date" id="tgllahir" name="tgllahir" class="form-control"
                                    value="{{ $user->tgllahir }}">
                                <div style="color: red">
                                    @error('tgllahir')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="foto" class="form-label">Foto</label>
                                <input type="hidden" id="foto" name="foto_lama" value="{{ $user->foto }}">
                                <input type="file" id="foto" name="foto" placeholder="foto" class="form-control"
                                    value="{{ old('foto') }}">
                            </div>
                            @if ($user->angkatan_id != '0')
                                <div>
                                    <label for="angkatan_id" class="form-label">Angkatan</label>
                                    <select id="angkatan_id" name="angkatan_id" class="form-control"
                                        value="{{ old('angkatan_id') }}">
                                        @foreach ($angkatan as $agkt)
                                            <option value="{{ $agkt->id }}">{{ $agkt->angkatan }}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red">
                                        @error('angkatan_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <input type="hidden" name="angkatan_id" value="{{ $user->angkatan_id }}">
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
