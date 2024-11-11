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
                                    <th scope="col">MICROSOFT OFFICE WORD <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">MICOSOFT OFFICE EXCEL <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">MICROSOFT POWERPOINT <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">SOHO NETWORKING <a href="/materi/tambah"><i class='bx bx-upload'></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materi as $mtri )
                                <tr>
                                    <th scope="row">{{$loop ->iteration}}</th>
                                    <td>{{$mtri ->word}}</td>
                                    {{-- <td>{{$mtri ->excel}}</td>
                                    <td>{{$mtri ->powerpoint}}</td>
                                    <td>{{$mtri ->soho}}</td> --}}
                                    <td><a href="/materi/edit/{{$mtri->id}}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="/materi/delete/{{$mtri->id}}" class="btn btn-danger">DELETE</a></td>
                                </tr>
                                @endforeach
                            </tbody>
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
