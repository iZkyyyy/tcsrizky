@extends('layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">Halo, {{ $greeting }}</h5>
        <div class="card-body">
            <h3 class="card-title">{{ Auth::user()->nama }}</h3>
            <p class="card-text">Anda Berhasil Login Sebagai {{ Auth::user()->akses }} @if (Auth::user()->akses == 'siswa')
                    kelas {{ Auth::user()->angkatan->kodekelas }}
                @endif LKP Palcomtech Opi Mall
            </p>
            <a href="/profile" class="btn btn-primary">Lihat Profile</a>
        </div>
    </div>
@endsection
