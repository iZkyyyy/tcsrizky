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
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/06/pct.png" alt="lkp">
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('soals.index') }}">Soal</a></li>
                <li><a href="{{ route('dmateris.index') }}">Materi</a></li>
                <li><a href="{{ route('users.index') }}">User</a></li>
                <li><a href="{{ route('angkatans.index') }}">Angkatan</a></li>
                <li><a href="/siswa">Siswa</a></li>
            </ul>
            </ul>
        </nav>
    </header>
    <div class="header">
        <div class="profile-container">
            <img src="https://awsimages.detik.net.id/community/media/visual/2018/03/03/39f24229-6f26-4a17-aa92-44c3bd3dae9e_43.jpeg?w=600&q=90"
                alt="Profile Photo" class="profile-circle">
        </div>
        <h1>Selamat Datang</h1>
    </div>

    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark min-vh-100" style="width: 280px;">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Setting Profile
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                <ul class="dropdown-menu dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="main">
            <div class="container vw-100">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
