@extends('layout.app')
@section('title')
    Kisi-Kisi Soal
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-17">
                <div class="card mb-3 Materi">
                    <div class="card-body">
                        <h6 class="card-title">{{ $SoalSiswa->data_materi->namamateri }}</h6>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Kisi-Kisi</h4>
                            <p>{{ $SoalSiswa->kisikisi }}</p>
                            <a class="btn btn-primary me-2" href="{{ route('soals.index') }}" role="button"><i
                                    class='bx bxs-arrow'></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
