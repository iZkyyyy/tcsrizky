@extends('layout.instruktur')
@section('content')
<div class="container">
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
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->akses}}</td>
                                    <td>{{$user->jeniskelamin}}</td>
                                    <td>{{$user->tgllahir}}</td>
                                    <td><a href="/user/edit/{{$user->id}}"><i class='bx bxs-edit'></i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary"><i class='bx bx-x' ></i></button>
                                    </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('users.create') }}" class="btn btn-dark">TAMBAH</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
