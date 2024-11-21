@extends('layout.instruktur')
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('angkatans.create') }}" role="button">Link</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                            <th scope="row">1</th>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->kodekelas }}</td>
                            <td>{{ $item->periode }}</td>
                            <td>{{ $item->mbdate }}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary me-2" href="{{ route('angkatans.edit', $item->id) }}"
                                    role="button">Link</a>
                                <form action="{{ route('angkatans.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
