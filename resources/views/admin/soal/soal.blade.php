@extends('layout.app')
@section('title')
 Kisi-Kisi Soal
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Kisi-Kisi Soal</h6>
        </div>
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
                            <td>{{ $item->data_materi->namamateri }}</td>
                            <td>{{ Str::limit($item->kisikisi, 100) }} </td>
                            <td class="d-flex">
                                <a class="btn btn-primary me-2" href="{{ route('soals.show', $item->id) }}"
                                    role="button"><i class='bx bxs-show'></i></a>
                                @if (Auth::user()->akses != 'siswa')
                                    <a class="btn btn-primary me-2" href="{{ route('soals.edit', $item->id) }}"
                                        role="button"><i class='bx bxs-edit'></i></a>
                                    <form action="{{ route('soals.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary"><i class='bx bxs-trash'></i></button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::user()->akses != 'siswa')
                <a href="{{ route('soals.create') }}" class="btn btn-dark"><i class='bx bx-plus'></i></a>
            @endif
        </div>
    </div>
@endsection
