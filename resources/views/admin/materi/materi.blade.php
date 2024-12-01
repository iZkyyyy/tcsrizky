@extends('layout.app')
@section('title')
    Materi Pelajaran
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Materi</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Materi</th>
                        <th scope="col">Deskripsi</th>
                        @if (Auth::user()->akses != 'siswa')
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataMateri as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td> <a class="" href="{{ route('dmateris.show', $item->id) }}" role="button"
                                    target="_blank">{{ $item->namamateri }}</a></td>
                            <td>{{ $item->deskripsi }}</td>
                            @if (Auth::user()->akses != 'siswa')
                                <td class="d-flex">
                                    <a class="btn btn-primary me-2" href="{{ route('dmateris.edit', $item->id) }}"
                                        role="button"><i class='bx bxs-edit'></i></a>
                                    <form action="{{ route('dmateris.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary"><i class='bx bxs-trash'></i></button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::user()->akses != 'siswa')
                <a href="{{ route('dmateris.create') }}" class="btn btn-dark"><i class='bx bx-plus'></i></a>
            @endif
        </div>
    </div>
@endsection
