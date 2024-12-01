<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- icon bootstarp --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap"
        rel="stylesheet">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}style2.css">

    <title>Palcomtech Opi</title>

</head>

<body>

    <!--Navbar Star-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"> PalComTech Opi </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/home#tentang">Tentang</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/home#program">Program</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/home#galeri">Galeri</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/home#staff">Staff</a>
                    </li>
                </ul>
                @guest
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                    </ul>
                @endguest

            </div>
        </div>
    </nav>
    <!--Navbar End-->

    @yield('content')

    {{-- footer --}}
    <footer>
        <div class="row">
            <div class="col-md-6">
                <div class="sosialmedia">
                    <a class="nav-link" href="https://www.facebook.com/palcomtech.opimall"><i class="bi bi-facebook">
                        </i>Facebook</a>
                    <a class="nav-link" href="https://www.tiktok.com/@palcomtechopimall"><i class="bi bi-tiktok">
                        </i>TikTok</a>
                    <a class="nav-link" href="https://www.instagram.com/palcomtech.opimall"><i class="bi bi-instagram">
                        </i>Instagram</a>
                    <a class="nav-link" href="www.youtube.com/@palcomtechopimall"><i class="bi bi-youtube">
                        </i>YouTube</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.2128280818433!2d104.78879927398765!3d-3.037517640045873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9c53660a505b%3A0xcef850e05d72998a!2sLKP%20PalComTech%20OPI%20Mall!5e0!3m2!1sid!2sid!4v1717987328070!5m2!1sid!2sid"
                        width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="credit">created by. <a href=""> Rizky & Rudi Hartono </a>| copyright &copy; 2024</div>
    </footer>


    {{-- js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        let scrollContainer = document.querySelector('.gallery');
        let backBtn = document.getElementById('backBtn');
        let nextBtn = document.getElementById('nextBtn');

        scrollContainer.addEventListener('wheel', (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
        nextBtn.addEventListener('click', () => {
            scrollContainer.scrollLeft += 900;
        })
        backBtn.addEventListener('click', () => {
            scrollContainer.scrollLeft -= 900;
        })
    </script>

</body>

</html>
