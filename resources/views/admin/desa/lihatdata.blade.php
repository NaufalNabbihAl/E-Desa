<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One%3A400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C700" />
    <!-- <link rel="stylesheet" href="./assets/style.css" /> -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Poppins;
            padding: auto;
        }

        * {
            margin: 0;
            padding: 0;
        }

        ul,
        li {
            list-style: none;
        }

        input {
            border: none;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1B2855;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 10px;
        }

        .sidebar a.active {
            background-color: #387372;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #739D9C;
            color: white;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            font-family: Poppins;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 3px;
            font-size: 25px;
            margin-left: 50px;
            color: white;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            /* padding: 16px; */
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        header {
            background-color: #54BAB9;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Gaya untuk ikon menu */
        .tombol {
            font-size: 20px;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        /* Gaya untuk tulisan Home */
        .tulisan-home {
            color: white;
        }

        /* Gaya untuk tulisan E - DESA */
        .tulisan-desa {
            color: white;
            font-size: 24px;
            padding: 10px;
            text-align: center;
        }

        /* Gaya untuk garis pembatas */
        .garis-pembatas {
            border-bottom: 3px solid #235252;
            margin-bottom: 10px;
        }

        /* Gaya untuk gambar profil */
        .user-profile {
            display: flex;
            padding: 8px 8px 8px 32px;
            margin-bottom: 10px;
        }

        /* Gaya untuk gambar profil bulat */
        .user-profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        /* Gaya untuk nama admin */
        .admin-name {
            color: white;
            margin-left: 10px;
        }

        /* Gaya untuk kontainer gambar profil dan nama admin */
        .profile-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        /* Gaya untuk garis pembatas di bawah gambar profil dan nama admin */
        .garis-pembatas-profile {
            border-bottom: 3px solid #235252;
            margin-bottom: 10px;
            width: 150px;
            margin: 0 auto 10px auto;
        }

        .content {
            padding: 20px;
        }

        .custom-box {
            width: 100%;
            height: 800px;
            /* Atur tinggi sesuai keinginan Anda */
            background-color: #D8D8D8;
            border-radius: 10px;
            border: 2px solid #1B2855;
            /* Menambahkan garis border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan efek drop shadow */
            box-sizing: border-box;
            /* Mempertahankan ukuran total kotak */
            position: relative;

            display: flex;
        }

        .sisikanan {
            width: 100%;
            height: 800px;
            /* Atur tinggi sesuai keinginan Anda */
            /* Mempertahankan ukuran total kotak */
            position: relative;
            flex-direction: column;
            display: flex;
        }

        .box-informasi {
            width: 85%;
            height: 380px;
            /* Atur tinggi sesuai keinginan Anda */
            background-color: #C1C0C0;
            border-radius: 10px;
            border: 2px solid #1B2855;
            /* Menambahkan garis border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan efek drop shadow */
            box-sizing: border-box;
            /* Mempertahankan ukuran total kotak */
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
            top: 20px;
            left: 20px;
            right: 10px;
            margin-bottom: 20px;
        }

        .box-informasialamat {
            width: 85%;
            height: 165px;
            /* Atur tinggi sesuai keinginan Anda */
            background-color: #C1C0C0;
            border-radius: 10px;
            border: 2px solid #1B2855;
            /* Menambahkan garis border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan efek drop shadow */
            box-sizing: border-box;
            /* Mempertahankan ukuran total kotak */
            position: relative;
            display: flex;
            align-items: center;
            gap: 50px;
            top: 20px;
            left: 20px;
            right: 10px;
            margin-bottom: 20px;
        }

        .box-nama {
            width: 85%;
            height: 165px;
            /* Atur tinggi sesuai keinginan Anda */
            background-color: #C1C0C0;
            border-radius: 10px;
            border: 2px solid #1B2855;
            /* Menambahkan garis border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan efek drop shadow */
            box-sizing: border-box;
            /* Mempertahankan ukuran total kotak */
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
            top: 20px;
            left: 20px;
            right: 10px;
            margin-bottom: 20px;
        }

        .box-nama img {
            width: 100px;
            /* Mengisi ruang yang tersedia dalam div */
            height: 100px;
            /* Mengisi ruang yang tersedia dalam div */
            border: 2px solid black;
            /* Menambahkan border hitam pada gambar */
            border-radius: 5px;
            /* Menambahkan sudut melengkung pada border */
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 30px;
        }

        .text-container {
            display: flex;
            flex-direction: column;
            left: 30px;
        }

        .nama {
            font-size: 25px;
            font-weight: bold;
        }

        .warga,
        .rw-rt {
            font-size: 18px;
        }



        .side-panel {
            width: 10%;
            background-color: #D8D8D8;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Menggeser konten ke kiri */
            position: relative;
        }

        .top-button {
            position: absolute;
            top: 20px;
            /* Mengatur posisi tombol di ujung atas */
            background-color: #C1C0C0;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100px;
            height: 40px;
            margin-left: auto;
            margin-right: auto;
            font-size: 25px;

        }

        .bottom-button {
            position: absolute;
            bottom: 20px;
            /* Mengatur posisi tombol di ujung bawah */
            left: 30px;
            /* Mengatur posisi tombol di kiri */
            background-color: #387372;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 146px;
            height: 40px;
        }

        /* .side-panel::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 2px;
      background-color: #54BAB9;
    } */

        .side-panel::after {
            content: "";
            position: absolute;
            top: 20px;
            /* Jarak atas garis */
            right: 0;
            height: calc(100% - 40px);
            /* Tinggi garis dengan jarak atas dan bawah */
            width: 2px;
            background-color: black;
        }

        .tomboledit {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 10px;
            padding: 8px 16px;
            background-color: #387372;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <div class="tulisan-desa">
            E - DESA
        </div>
        <div class="garis-pembatas"></div>
        <div class="profile-container">
            <div class="user-profile">
                <img src="{{ url('assets/admin/img/profile.jpg') }}" alt="User Profile">
            </div>
            <div class="admin-name">Admin Desa</div>
        </div>
        <div class="garis-pembatas-profile"></div>
        <a class="active" href="{{ route('desa.index') }}">Data Warga</a>
        <a href="{{ route('desa.pengumuman') }}">Pengumuman</a>
        <a href="{{ route('desa.laporankeuangan') }}">Laporan Keuangan</a>
    </div>

    <div id="main">
        <!-- <button class="openbtn" onclick="openNav()">☰</button>  -->
        <header>
            <div class="header-content">
                <span class="tombol" onclick="toggleSidebar()">&#9776;</span>
                <span class="tulisan-home">Detail Data Agus Supaidin</span>
            </div>
        </header>

        <div class="content">
            <h2>Pengaturan Akun</h2>
            <div class="custom-box">
                <div class="side-panel">
                    <button class="top-button">Profile</button>
                    <!-- Konten dalam side panel -->
                    <button class="bottom-button" onclick="routetoindex()">Kembali</button>
                </div>
                <div class="sisikanan">
                    <div class="box-nama">
                        <img src="{{ url('assets/img/profile.jpg') }}" alt="Gambar">
                        <div class="text-container">
                            <a class="nama">Nusa Adrian Arifin</a>
                            <a class="warga">Warga</a>
                            <a class="rw-rt">RT01/RW02</a>
                        </div>
                        <button class="tomboledit">Edit</button>
                    </div>

                    <div class="box-informasi">
                        <a>Test</a>
                        <a>Test</a>
                    </div>

                    <div class="box-informasialamat">
                        <div class="text-container">
                            <a class="warga">Jalan</a>
                            <a class="rw-rt">Jl. Ketintang Selatan</a>
                        </div>
                        <div class="text-container">
                            <a class="warga">Desa</a>
                            <a class="rw-rt">Ngantang</a>
                        </div>
                        <div class="text-container">
                            <a class="warga">Kecamatan</a>
                            <a class="rw-rt">Gayukromo</a>
                        </div>
                        <div class="text-container">
                            <a class="warga">RT</a>
                            <a class="rw-rt">01</a>
                        </div>
                        <div class="text-container">
                            <a class="warga">RW</a>
                            <a class="rw-rt">02</a>
                        </div>
                    </div>




                </div>



                <!-- Konten dalam kotak dengan garis border -->
            </div>
        </div>
    </div>

    <script>
        var sidebarOpen = false;

        function toggleSidebar() {
            if (sidebarOpen) {
                closeNav();
            } else {
                openNav();
            }
        }

        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            sidebarOpen = true;
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            sidebarOpen = false;
        }

        // Fungsi untuk membuka sidebar saat halaman dimuat
        window.addEventListener("DOMContentLoaded", function(event) {
            openNav();
        });

        function routetoindex() {
            // Ganti "halaman-tujuan.html" dengan URL atau path file dari halaman tujuan
            window.location.href = "Index.html";
        }
    </script>

</body>

</html>
