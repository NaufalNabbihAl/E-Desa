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

        .custom-box {
            border: 1px solid black;
            border-radius: 5px;
            width: 100%;
            height: 800px;
            position: relative;
        }

        .box-header {
            background-color: #1B2855;
            color: #fff;
            padding: 10px;
            height: 50px;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }

        .button-kembali {
            position: absolute;
            bottom: 10px;
            left: 10px;
            padding: 8px 16px;
            background-color: #387372;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .button-kirim {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 8px 16px;
            background-color: #387372;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .form-container {
            padding: 30px;
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
                <img src="{{ url('assets/img/profile.jpg') }}" alt="User Profile">
            </div>
            <div class="admin-name">Admin Desa</div>
        </div>
        <div class="garis-pembatas-profile"></div>
        <a href="{{ route('desa.index') }}">Data Warga</a>
        <a href="{{ route('desa.pengumuman') }}">Pengumuman</a>
        <a class="active" href="{{ route('desa.laporankeuangan') }}">Laporan Keuangan</a>
    </div>

    <div id="main">
        <header>
            <div class="header-content">
                <span class="tombol" onclick="toggleSidebar()">&#9776;</span>
                <span class="tulisan-home">Tambah Data</span>
            </div>
        </header>

        <div class="content">
            <h1>Buat laporan keuangan</h1>
            <div class="custom-box">
                <div class="box-header"></div>
                <form action="{{ route('desa.storeLaporan') }}" method="post" enctype="multipart/form-data"
                    class="form-container">
                    @csrf
                    <div class="form-group">
                        <label for="noSurat">No. Surat:</label>
                        <input type="text" id="noSurat" name="noSurat" class="input-field"
                            placeholder="Masukkan nomor surat...">
                    </div>
                    <div class="form-group">
                        <label for="namaSurat">Nama Surat:</label>
                        <input type="text" id="namaSurat" name="nama" class="input-field"
                            placeholder="Masukkan nama surat...">
                    </div>
                    <div class="form-group">
                        <label for="fileSurat">File Surat:</label>
                        <input type="file" id="fileSurat" name="file" class="input-field">
                    </div>

                    <button class="button-kembali" onclick="kembali()">Kembali</button>
                    <button type="" class="button-kirim">Kirim</button>
            </div>
        </div>
        </form>

    </div>

    <div id="popupSuccess" class="popup">
        <div class="popup-content">
            <div class="popup-message">Laporan keuangan berhasil dibuat!</div>
            <button class="popup-done" onclick="closePopup()">OK</button>
        </div>
    </div>

    <div id="popupError" class="popup">
        <div class="popup-content">
            <div class="popup-message">Laporan keuangan gagal dibuat. Harap isi semua field!</div>
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

        function kembali() {
            // Tambahkan fungsi untuk tombol "Kembali" di sini
            window.location.href = "laporankeuangan.html";
        }

        function kirim() {
            // Tambahkan fungsi untuk tombol "Kirim" di sini
            alert("Tombol Kirim diklik!");
        }

        function validateForm() {
            var noSurat = document.getElementById("noSurat").value;
            var namaSurat = document.getElementById("namaSurat").value;

            if (noSurat === "" || namaSurat === "") {
                openErrorPopup();
            } else {
                openSuccessPopup();
            }
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
