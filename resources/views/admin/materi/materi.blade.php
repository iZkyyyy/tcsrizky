@extends('layout.instruktur')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3 Materi">
                <div class="card-body">
                    <h6 class="card-title">Materi</h6>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
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
                                            role="button"><i class='bx bxs-edit'></i></a>
                                        <form action="{{ route('dmateris.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary"><i class='bx bxs-trash'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('dmateris.create') }}" class="btn btn-dark"><i class='bx bx-plus' ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
