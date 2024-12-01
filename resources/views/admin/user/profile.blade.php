@extends('layout.app')
@section('title')
    Profile
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">Profile</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-3">
                        <div class="col-4">Nama</div>
                        <div class="col-8">: {{ Auth::user()->nama }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">Jenis Kelamin</div>
                        <div class="col-8">: {{ Auth::user()->jeniskelamin }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">Tanggal Lahir</div>
                        <div class="col-8">: {{ Auth::user()->tgllahir }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">Email</div>
                        <div class="col-8">: {{ Auth::user()->email }}</div>
                    </div>
                    @if (Auth::user()->akses == 'siswa')
                        <div class="row mb-3">
                            <div class="col-4">Kelas</div>
                            <div class="col-8">: {{ Auth::user()->angkatan->kodekelas }}</div>
                        </div>
                    @else
                        <div class="row mb-3">
                            <div class="col-4">Jabatan</div>
                            <div class="col-8">: {{ Auth::user()->akses }}</div>
                        </div>
                    @endif
                    <div class="row mb-3">
                        <div class="col-4">Alamat</div>
                        <div class="col-8">: {{ Auth::user()->alamat }}</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('storage/uploads/' . Auth::user()->foto) }}" alt="foto profil" width="100%">
                </div>
            </div>

            <a href="/dashboard" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-17">
                <div class="card mb-3 Materi">
                    <div class="card-body">
                        <h6 class="card-title">DATA USER</h6>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">AKSES</th>
                                        <th scope="col">JENIS KELAMIN</th>
                                        <th scope="col">TANGGAL LAHIR</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->akses }}</td>
                                            <td>{{ $user->jeniskelamin }}</td>
                                            <td>{{ $user->tgllahir }}</td>
                                            <td class="d-flex">
                                                <a class="btn btn-primary me-2" href="{{ route('users.edit', $user->id) }}"
                                                    role="button"><i class='bx bxs-edit'></i></a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class='bx bxs-trash'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('users.create') }}" class="btn btn-dark"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
