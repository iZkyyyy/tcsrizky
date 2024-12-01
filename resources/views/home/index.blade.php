@extends('layout.layout')
@section('content')
    <!-- hero star  -->
    <section class="hero" id="home">
        <main class="content">
            <h1>LKP PALCOMTECH OPI MALL</h1>
            <p>Kursus Komputer dan Bahasa Inggris.</p>
        </main>
    </section>
    <!-- hero and  -->

    <!-- about start -->
    <section class="about container" id="tentang">
        <h2><span>Tentang </span>Kami</h2>
        <div class="row">
            <div class="about-content">
                <h3>Apasih PalComTech Itu?</h3>
                <p> PalComTech, adalah lembaga pendidikan generasi internet, berdiri sejak 2003, saat ini telah membantu
                    dan mendidik ribuan siswa mencapai kesuksesan dalam karier maupun usaha, dengan sistem belajar 100%
                    praktek 100% internet PalComTech menjamin setiap siswa dapat mempraktekan materi yang dipelajari
                    secara langsung didepan komputer.PalComTech hingga saat ini telah memiliki 6 training center, 1
                    sekolah tinggi ilmu komputer dan 1 politeknik yang tersebar di 6 Cabang antara lain: Palembang, Opi,
                    Sako, Lahat, Prabumulih, dan Baturaja.</p>
                <h3>Visi</h3>
                <p>Menjadi Institusi Pendidikan berkelas Dunia yang berprestasi dan menghasilkan SDM (Sumber Daya
                    Manusia) kompeten dan berjiwa enterprenuer.</p>
                <h3>Misi</h3>
                <p>- Palcomtech sebagai jaringan lembaga pendidikan profesional dan berprestasi yang menyelenggarakan
                    pendidikan dan pelatihan dengan sistem 100% praktek 100%internet dengan standar maju internasional.
                    <br>
                    - PalComTech menyelenggarakan berbagai program studi yang menunjang kerier dan masa depan bagi
                    seluruh lapisan masyarakat melalui jaringan PalComTech diseluruh Indonesia.
                    <br>
                    - PalComTech menghasilkan SDM (Sumber Daya Manusia) yang kompeten dan berjiwa enterprenuer melalui
                    sistem pendidikan berkualitas,tenaga pengajar terampil, bahan ajar yang sesuai dengan kebutuhan
                    dunia usaha dan industri, sarana teknologi modern, serta lingkungan belajar yang ideal.
                </p>
            </div>
        </div>
    </section>
    <!-- about and -->

    <!-- Program star -->
    <section class="program" id="program">
        <h2 class="heading"><span>Program</span></h2>
        <div class="container">
            <div class="row program-container justify-content-center">
                <div class="col-md-4 col-sm-6 mb-3 col-11">
                    <div class="program-box">
                        <img src="galeri/1th.jpeg" alt="">
                        <div class="program-layer">
                            <h4>Program 1 Tahun</h4>
                            <p>Cocok untuk fresh graduate yang ingin langsung dapat kerja</p>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3 col-11">
                    <div class="program-box">
                        <img src="galeri/ptik.jpeg" alt="">
                        <div class="program-layer">
                            <h4>Program P.T.I.K 10 Bulan</h4>
                            <p>Cocok untuk pelajar yang ingin lanjut kuliah</p>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3 col-11">
                    <div class="program-box">
                        <img src="galeri/sc.jpeg" alt="">
                        <div class="program-layer">
                            <h4>Short Course</h4>
                            <p>Dengan waktu 1 sampai 3 bulan bisa mahir</p>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3 col-11">
                    <div class="program-box">
                        <img src="galeri/so.jpeg" alt="">
                        <div class="program-layer">
                            <h4>Speakout</h4>
                            <p>Ngomong Inggris jadi mudah dan percaya diri</p>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3 col-11">
                    <div class="program-box">
                        <img src="galeri/calistung.jpg" alt="">
                        <div class="program-layer">
                            <h4>Calistung</h4>
                            <p>Baca tulis hitung cocok untuk anak-anak</p>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project and -->

    <!-- Galeri star -->
    <section class="galeri" id="galeri">
        <h2><span>Galeri</span></h2>
        <div class="row">
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
            <div class="galeri-card">
                <img src="galeri/desktop3.jpg" alt="--galeri 1 Tahun--" class="galeri-img">
            </div>
        </div>
    </section>
    <!-- Galeri end -->

    <!--Carousel Star-->
    <section id="staff">
        <h2>Staff Palcomtech Opi Mall</h2>
        <div class="gallery-wrap">
            <img src="https://cdn-icons-png.freepik.com/512/93/93634.png" id="backBtn">
            <div class="gallery">
                <div>
                    <span><img src="galeri/bapak ferlian.png"></span>
                    <span><img src="galeri/mba puji.png"></span>
                    <span><img src="galeri/mis dian.png"></span>
                </div>
                <div>
                    <span><img src="galeri/mba mei.png"></span>
                    <span><img src="galeri/kk rudi.png"></span>
                    <span><img src="galeri/kk zaki.png"></span>
                </div>
                <div>
                    <span><img src="galeri/kk aan.png"></span>
                    <span><img src="galeri/mba fit.png"></span>
                    <span><img src="galeri/andini.jpeg"></span>
                </div>
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/7604/7604747.png" id="nextBtn">
        </div>
    </section>

    <!--Carousel End-->
@endsection
