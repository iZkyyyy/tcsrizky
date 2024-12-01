<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- css vanilla --}}
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="logo ms-4">
                <img src="{{ asset('/') }}galeri/pct.png" alt="lkp">
            </div>
            <ul class="nav-links">
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="{{ route('soals.index') }}">Kisi-Kisi Soal</a></li>
                <li><a href="{{ route('dmateris.index') }}">Materi</a></li>
                @if (Auth::user()->akses != 'siswa')
                    <li><a href="{{ route('users.index') }}">User</a></li>
                    <li><a href="{{ route('angkatans.index') }}">Angkatan</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <section class="header">
        <div class="row container-fluid">
            <div class="col-6 d-flex">
                <img src="{{ asset('storage/uploads/' . Auth::user()->foto) }}" alt="foto profil"
                    class="rounded-circle ms-3" width="60">
                <h2 class="ms-2 align-content-center">Selamat Datang, <a href="/profile"
                        class="text-white text-decoration-none">{{ Auth::user()->nama }}</a> </h2>
            </div>
            <div class="col-6 text-end align-content-center">
                <h4><a href="/logout" class="text-white text-decoration-none">Keluar</a></h4>
            </div>
        </div>

    </section>
    <div class="main">
        <div class="container mt-3">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
