@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3 soal">
                <div class="card-body">
                    <h6 class="card-title">TRIWULAN 1</h6>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">MICROSOFT OFFICE WORD <a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">MICOSOFT OFFICE EXCEL <a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">MICROSOFT POWERPOINT <a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">SOHO NETWORKING <a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Soalsiswa as $SS )
                                <tr>
                                    <th scope="row">{{$loop ->iteration}}</th>
                                    <td>{{$SS ->word}}</td>
                                    <td><a href="/edit1" {{$SS->id}} class="btn btn-success">EDIT</a><a href="/delete1" {{$SS->id}} class="btn btn-danger">DELETE</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3 soal">
                <div class="card-body">
                    <h6 class="card-title">TRIWULAN 2</h6>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">UI/UX DESIGN<a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">APLIKASI WEB CMS<a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                    <th scope="col">WEB PROGRAMMING <a href="/soal/tambah"><i class='bx bx-upload'></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Soalsiswa as $SS )
                                <tr>
                                    <th scope="row">{{$loop ->iteration}}</th>
                                    <td>{{$SS ->word}}</td>
                                    <td><a href="/soal/edit/{{$SS->id}}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="/soal/delete/ {{$SS->id}}" class="btn btn-danger">DELETE</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
