@extends('layout.instruktur')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-17">
                <div class="card mb-3 Materi">
                    <div class="card-body">
                        <h6 class="card-title">DATA Soal</h6>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Materi</th>
                                        <th scope="col">Kisi Kisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Soalsiswa as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->materi_siswa_id }}</td>
                                            <td>{{ $item->kisikisi }}</td>
                                            <td class="d-flex">
                                                <a class="btn btn-primary me-2" href="{{ route('soals.edit', $item->id) }}"
                                                    role="button"><i class='bx bxs-edit'></i></a>
                                                <form action="{{ route('soals.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary"><i class='bx bxs-trash'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('soals.create') }}" class="btn btn-dark"><i class='bx bx-plus' ></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
