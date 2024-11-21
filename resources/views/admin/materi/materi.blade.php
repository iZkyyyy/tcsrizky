@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3 Materi">
                <div class="card-body">
                    <h6 class="card-title">TRIWULAN 1</h6>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Materi</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DataMateri as $item )
                                <tr>
                                    <th scope="row">{{$loop ->iteration}}</th>
                                    <td>{{$item ->namamateri}}</td>
                                    <td>{{$item ->deskripsi}}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-primary me-2" href="{{ route('dmateris.edit', $item->id) }}"
                                            role="button">Link</a>
                                        <form action="{{ route('dmateris.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <a href="{{ route('dmateris.create') }}" class="btn btn-dark">TAMBAH</a>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3 Materi">
                <div class="card-body">
                    <h6 class="card-title">TRIWULAN 2</h6>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">UI/UX DESIGN <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">APLIKASI WEB CMS <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">WEB PROGRAMMING <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($materi as $mtri )
                                <tr>
                                    <th scope="row">{{$loop ->iteration}}</th>
                                    <td>{{$mtri ->word}}</td>
                                    <td>{{$mtri ->excel}}</td>
                                    <td>{{$mtri ->powerpoint}}</td>
                                    <td>{{$mtri ->soho}}</td>
                                    <td><a href="/edit" {{$mtri->id}} class="btn btn-success">EDIT</a></td>
                                    <td><a href="/delete" {{$mtri->id}} class="btn btn-danger">DELETE</a></td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
