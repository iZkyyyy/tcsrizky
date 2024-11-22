<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .img {
        border-radius: 2%;
        text-align: center;
    }

    .navbar {
        background-color: #ffffff;
        color: #000000;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 1.5em;
        font-weight: bold;
        margin-right: 1em;
    }

    .logo img{
        width: 200px;
        margin-right: 10px;
        }

    .nav-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .nav-links li {
        margin-right: 20px;
    }

    .nav-links a {
        color: black;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .nav-links a:hover {
        color: orange;
    }

    .nav-links a.active {
        color: orange;
        border-bottom: 2px solid #fff;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        cursor: pointer;
    }

    .dropdown-menu {
        position: absolute;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        display: none;
    }

    .dropdown-menu li {
        margin-bottom: 10px;
    }

    .dropdown-menu a {
        color: black;
        text-decoration: none;
    }

    .dropdown-menu a:hover {
        color: orange;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .burger {
        display: none;
        cursor: pointer;
    }

    .burger .line1, .burger .line2, .burger .line3 {
        width: 30px;
        height: 3px;
        background-color: #fff;
        margin: 5px;
        transition: all 0.3s ease;
    }

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }

    .burger {
        display: block;
    }

    .burger .line1 {
        transform: rotate(-45deg) translate(-5px, 5px);
    }

    .burger .line2 {
        opacity: 0;
    }

    .burger .line3 {
        transform: rotate(45deg) translate(-5px, -5px);
    }

    .nav-links.show {
        display: block;
        position: absolute;
        background-color: #333;
        padding: 10px;
        border-radius: 5px;
        top: 100%;
        left: 0;
        width: 100%;
    }

    .nav-links.show li {
        margin-bottom: 10px;
    }

    .nav-links.show a {
        display: block;
    }
}
    .img-container {
        text-align: center;
    }
    .desc{
        background-color: #007AFF;
    }
    .desc h2{
        padding: 5px;
        font-family: sans-serif;
        color: #FFFFFF;
        text-align: center;
        font-size: 22px;
    }
    .desc p{
        font-family: arial ;
        color: #FFFFFF;
        text-align: justify;
        font-size: 18px;
        justify-content: center;
    }
    footer{
        background-color: #1a1ab5;
    }
    .footer img{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
    }
    .footerNav{
        margin :1px;
    }
    .footerNav ul{
        display: flex;
        justify-content: left;
    }
    .footerNav p{
        color: white;
        font-size: 10;
    }
    .footerBottom{
        background-color: #1a1ab5;
        padding: 1px;
        text-align: center;
    }
    .footerBottom p{
        color: white;
    }
    .designer{
        opacity: 0.7;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 400;
        margin: 0px 5px;
    }
    .gallery{
        width: 600px;
        display: flex;
        overflow-x: scroll;
    }
    .gallery div{
        width: 100%;
        display: grid;
        grid-template-columns: auto auto auto;
        grid-gap: 20px;
        flex: none;
    }

    .gallery div img{
        width: 100%;
        filter: grayscale(100%);
        transition: transform 0.5s;
    }
    .gallery::-webkit-scrollbar {
        display: none;
    }
    .gallery-wrap{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10%
    }
    #backBtn, #nextBtn{
        width: 50px;
        cursor: pointer;
        margin: 40px;
    }
    .gallery div img:hover{
        filter: grayscale(0);
        cursor: pointer;
        transform: (1.1);
    }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/06/pct.png" alt="lkp">
            </div>
            <ul class="nav-links">
                <li><a href="/beranda" class="active">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Login</a>
                    <ul class="dropdown-menu">
                        <li><a href="/siswa">Siswa</a></li>
                        <li><a href="/instruktur">Instruktur</a></li>
                        <li><a href="/pimpinan">Pimpinan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Cabang Outlet</a>
                    <ul class="dropdown-menu">
                        <li><a href="/sudirman">PalComTech Sudirman</a></li>
                        <li><a href="/lahat">PalComTech Lahat</a></li>
                        <li><a href="/prabumulih">PalComTech Prabumulih</a></li>
                        <li><a href="/baturaja">PalComTech Baturaja</a></li>
                        <li><a href="/opimall">PalComTech Opi Mall</a></li>
                        <li><a href="/sako">PalComTech Sako</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('dmateris.index') }}">Materi</a></li>
                <li><a href="{{ route('soals.index') }}">Soal</a></li>
                {{-- <li><a href="{{ route('absens.index') }}">Absen</a></li> --}}
                <li><a href="{{ route('users.index') }}">User</a></li>
                <li><a href="{{ route('angkatans.index') }}">Angkatan</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <div>
        <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/terbaik-lkp-1.png" alt="Gambar contoh" width="100%">
        <div class="img-container">
            <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/07/unggulan-100.png" alt="Gambar contoh" width="15%">
            <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/07/unggulan-garansi.png" alt="Gambar contoh" width="15%">
            <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/07/unggulan-terbaik.png" alt="Gambar contoh" width="15%">
            <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/07/unggulan-sertifikat.png" alt="Gambar contoh" width="15%">
        </div>
        <div class="desc">
            <h2>Tentang LKP PalComTech</h2>
            <p>LKP PalComTech menjadi Lembaga kursus Terbaik Tingkat Nasional yang telah Terakreditasi dan Berkinerja dengan Mutu “A”. Ini menjadi bukti bahwa LKP PalComTech memiliki kredibilitas yang tinggi dan telah memenuhi standar kualitas dan mutu yang telah ditetapkan oleh pemerintah. LKP PalComTech juga memiliki reputasi yang baik dimasyarakat. Hal ini dibuktikan dengan banyaknya alumni LKP PalComTech yang berhasil mendapatkan pekerjaan yang sesuai dengan bidang ilmunya diberbagai industri. LKP PalComTech memiliki kurikulum dan materi yang sesuai dengan kebutuhan Dunia Industri Dunia Usaha dan Dunia Kerja, didukung oleh Tenaga pengajar yang profesional, konsep belajar Active Learning, 100% praktek 100% internet, fasilitas dan sarana belajar yang kekinian, ini membuat daya tangkap belajar siswa 3x lipat lebih cepat dan merasa nyaman saat belajar.</p>
        </div>
        <div class="gallery-wrap">
            <img src="https://cdn-icons-png.freepik.com/512/93/93634.png" id="backBtn">
            <div class="gallery">
                <div>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0014-150x150.jpg"></span>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0031-150x150.jpg"></span>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0015-150x150.jpg"></span>
                </div>
                    <div>
                        <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0016-150x150.jpg"></span>
                        <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0017-150x150.jpg"></span>
                        <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0027-150x150.jpg"></span>
                    </div>
                    <div>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0028-150x150.jpg"></span>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0013-150x150.jpg"></span>
                    <span><img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/08/IMG-20240801-WA0029-150x150.jpg"></span>
                </div>
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/7604/7604747.png" id="nextBtn">
        </div>
        <footer>
            <img src="https://kursus.palcomtech.ac.id/wp-content/uploads/2024/06/pctlogo.png" alt="palcomtechlogo" width="200px">
        </footer>
        <script>
            let scrollContainer = document.querySelector('.gallery');
            let backBtn = document.getElementById('backBtn');
            let nextBtn = document.getElementById('nextBtn');

            scrollContainer.addEventListener('wheel', (evt) =>{
                evt.preventDefault();
                scrollContainer.scrollLeft += evt.deltaY;
            });
            nextBtn.addEventListener('click', () =>{
                scrollContainer.scrollLeft += 900;
            })
            backBtn.addEventListener('click', () =>{
                scrollContainer.scrollLeft -= 900;
            })
        </script>
    </body>
</html>
