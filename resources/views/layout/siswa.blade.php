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
                                            <td>{{ $item->data_materi->namamateri }}</td>
                                            <td>{{ $item->kisikisi }}</td>
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
