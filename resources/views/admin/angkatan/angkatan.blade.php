@extends('layout.app')
@section('title')
    Angkatan
@endsection
@section('content')
    <div class="card mb-3 soal">
        <div class="card-body">
            <h6 class="card-title">ANGKATAN</h6>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">kode kelas</th>
                            <th scope="col">periode Belajar</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Angkatan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ $item->kodekelas }}</td>
                                <td>{{ $item->periode }}</td>
                                <td>{{ $item->mbdate }}</td>
                                <td class="d-flex">
                                    <a class="btn btn-primary me-2" href="{{ route('angkatans.edit', $item->id) }}"
                                        role="button"><i class='bx bxs-edit'></i></a>
                                    <form action="{{ route('angkatans.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary"><i class='bx bxs-trash'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-dark" href="{{ route('angkatans.create') }}" role="button"><i class='bx bx-plus'></i></a>
            </div>
        </div>
    </div>
@endsection
