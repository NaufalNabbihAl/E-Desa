<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="./assets/style.css" /> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C700" />
    <script src="https://unpkg.com/boxicons@2.0.9/js/boxicons.min.js"></script>

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
        }

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

        .tombol {
            font-size: 20px;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        .tulisan-home {
            color: white;
        }

        .tulisan-desa {
            color: white;
            font-size: 24px;
            padding: 10px;
            text-align: center;
        }

        .garis-pembatas {
            border-bottom: 3px solid #235252;
            margin-bottom: 10px;
        }

        .user-profile {
            display: flex;
            padding: 8px 8px 8px 32px;
            margin-bottom: 10px;
        }

        .user-profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .admin-name {
            color: white;
            margin-left: 10px;
        }

        .profile-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .garis-pembatas-profile {
            border-bottom: 3px solid #235252;
            margin-bottom: 10px;
            width: 150px;
            margin: 0 auto 10px auto;
        }

        .content {
            padding: 20px;
        }

        .form-container {
            border: 2px solid #000;
            border-radius: 10px;
        }

        .form-container2 {
            padding: 20px;
            border: 2px;
            border-radius: 10px
        }

        .form-header {
            background-color: #1B2855;
            color: #fff;
            padding: 10px;
            font-weight: bold;
            height: 40px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
            margin-left: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            /* Menambahkan properti box-sizing untuk mengatur lebar input sesuai dengan border */
        }

        .submit-button {
            background-color: #387372;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .button-edit {
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

        .popup {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            display: none;
        }

        .popup-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .popup-message {
            margin-bottom: 20px;
            text-align: center;
        }

        .popup-close {
            cursor: pointer;
            background-color: red;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
        }

        .popup-done {
            cursor: pointer;
            background-color: #44E02A;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
        }

        .table1 {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #387372;
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #387372;

        }

        th {
            background-color: white;
            border: 1px solid #387372;
        }

        td {
            border: 1px solid #387372;
        }


        .content {
            padding: 20px;
        }

        button.ditolak {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            cursor: pointer;
        }

        button.diterima {
            background-color: #4486D3;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
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
                <img src="./assets/img/profile.jpg" alt="User Profile">
            </div>
            <div class="admin-name">Admin Kegiatan Warga</div>
        </div>
        <div class="garis-pembatas-profile"></div>
        <a href="{{ route('kegiatanWarga.index') }}">UMKM</a>
        <a class="active"href="{{ route('kegiatanWarga.banksampah') }}">Bank Sampah</a>
        <a href="{{ route('kegiatanWarga.jadwalkegiatan') }}">Jadwal Kegiatan Warga</a>
    </div>

    <div id="main">
        <header>
            <div class="header-content">
                <span class="tombol" onclick="toggleSidebar()">&#9776;</span>
                <span class="tulisan-home">Pengumuman</span>
            </div>
        </header>

        <div class="content">
            <div class="form-container">
                <div class="form-header">
                    <h2>Bank Sampah</h2>
                </div>
                <div class="form-container2">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal Penyetoran</th>
                                <th>Berat Sampah</th>
                                <th>Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @csrf
                            @foreach ($bank as $b)
                                <tr>
                                    <td>{{ $b->nama }}</td>
                                    <td>{{ $b->tanggal }}</td>
                                    <td>
                                        {{ $b->berat }} Kg
                                    </td>
                                    <td>
                                        Rp {{ $b->pendapatan }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('kegiatanWarga.inputbanksampah') }}" type="submit" class="submit-button">Input Data
                    Sampah
                    Warga</a>
            </div>

        </div>

    </div>

    <div id="popupSuccess" class="popup">
        <div class="popup-content">
            <div class="popup-message">Pengumuman berhasil dibuat!</div>
            <button class="popup-done" onclick="closePopup()">OK</button>
        </div>
    </div>

    <div id="popupError" class="popup">
        <div class="popup-content">
            <div class="popup-message">Pengumuman gagal dikirim. Harap isi semua field!</div>
            <button class="popup-close" onclick="closePopup()">OK</button>
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

        window.addEventListener("DOMContentLoaded", function(event) {
            openNav();
        });

        function validateForm() {
            var judul = document.getElementById("judul").value;
            var isi = document.getElementById("isi").value;

            if (judul === "" || isi === "") {
                openErrorPopup();
                return false;
            }

            openSuccessPopup();
            return false;
        }

        function openSuccessPopup() {
            document.getElementById("popupSuccess").style.display = "block";
        }

        function openErrorPopup() {
            document.getElementById("popupError").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popupSuccess").style.display = "none";
            document.getElementById("popupError").style.display = "none";
        }
    </script>

</body>

</html>
