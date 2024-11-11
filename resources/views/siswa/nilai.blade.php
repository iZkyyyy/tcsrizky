<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    :root{
        --tran-03: all 0.2s ease;
        --tran-03: all 0.3s ease;
        --tran-04: all 0.4s ease;
        --tran-05: all 0.5s ease;
    }
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .img {
        border-radius: 2%;   
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
    .header {
      background-color: #007AFF;
      padding: 5px;
      display: flex;
    }
    .header-logo {
        display: flex;
        align-items: center;
    }
    .header h1 {
      font-family: sans-serif;
      font-size: 22px;
      text-align: justify;
    }
    .sidebar {
      background-color: #FF6600;
      width: 130px;
      padding: 20px;
      height: 560px;
      position: fixed;
      filter: drop-shadow(1px 0px 3px grey);
    }
    .sidebar li{
      height: 50px;
      margin-top: 10px;
      list-style: none;
      display: flex;
      align-items: center;
    }
    .sidebar li .icon{
     font-size: 20px;
    }
    .sidebar li .icon
    .sidebar li .text{
     color: black;
    }
    .sidebar li a{
        text-decoration: none;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        transition: var(--tran-04);
        background-color: #FFD7C4;
        color : black;
        border-radius: 60px;
        text-align: center;
        justify-content: center;
        filter: drop-shadow(0px 0px 1px grey);

    }
    .sidebar li a:hover{
        background-color: #FF9874; 
    }
    .container {
      display: flex;
    }
    .profile-container {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
    .profile-circle {
    width: 60px;
    height: 60px;
    object-fit: cover; 
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
                <li><a href="/beranda">Beranda</a></li>
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
                <li><a href="/materi">Materi</a></li>
                <li><a href="/kumpul">Kumpul</a></li>
                <li><a href="/nilai" class="active">Nilai</a></li>
                <li><a href="/absen">Absen</a></li>
                <li><a href="/materikrud">Materi</a></li>
                <li><a href="/nilaikrud">Nilai</a></li>
                <li><a href="/user">User</a></li>
                <li><a href="/absensi">Absensi</a></li>
                <li><a href="/materir">Materi</a></li>
                <li><a href="/nilair">Nilai</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
        <div class="header">
            <div class="profile-container">
                <img src="https://awsimages.detik.net.id/community/media/visual/2018/03/03/39f24229-6f26-4a17-aa92-44c3bd3dae9e_43.jpeg?w=600&q=90" alt="Profile Photo" class="profile-circle">
            </div>
            <h1>Selamat Datang</h1>
      </div>
      <div class="container">
        <div class="sidebar">
          <li class="side-nav">
            <a href="/profil">
                <span class="text nav-text">PROFIL</span>
                </a>
            </li>
          <li class="side-nav">
            <a href="/setting">
                <span class="text nav-text">SETTING</span>
                </a>
            </li>
          <li class="side-nav">
            <a href="/tcs">
                <span class="text nav-text">DAFTAR TCS</span>
                </a>
            </li>
          <li class="side-nav">
            <a href="/spp">
                <span class="text nav-text">CEK SPP</span>
                </a>
            </li>
          <li class="side-nav">
            <a href="/jadwal">
                <span class="text nav-text">JADWAL INSTRUKTUR</span>
                </a>
            </li>
        </div>
    </body>
</html>