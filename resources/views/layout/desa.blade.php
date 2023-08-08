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


        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .content {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 12;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border: none;
        }

        th {
            background-color: #1B2855;
            color: white;
        }

        td {
            background-color: #C1C0C0;
        }

        button {
            padding: 5px 10px;
            margin-right: 5px;
        }

        button.lihat-button {
            background-color: #1B2855;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
        }

        button.delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            cursor: pointer;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 0 30px;
            /* Sesuaikan ukuran celah di kanan dan kirinya */
        }

        .custom-box {
            width: 100%;
            height: 80px;
            /* Atur tinggi sesuai keinginan Anda */
            background-color: white;
            border-radius: 10px;
            border: 2px solid #387372;
            /* Menambahkan garis border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan efek drop shadow */
            box-sizing: border-box;
            /* Mempertahankan ukuran total kotak */
            position: relative;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        /* Styling untuk tombol konfirmasi dalam pop-up */
        .confirm-button {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }

        .deny-button {
            background-color: white;
            color: black;
            padding: 5px 10px;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Styling untuk tengah secara horizontal */
        .center-horizontal {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Styling untuk tengah secara vertikal */
        .center-vertical {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        /* Styling untuk tengah secara horizontal dan vertikal */
        .center-both {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .header {
            display: flex;
            width: 800px;
            border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 5px;
        }

        .search {
            width: 800px;
            border: 1px solid #d9d9d9;
            border-radius: 10px;
            margin-right: 20px;
        }

        .password-input {
            border: 1px solid #ddd;
            /* Atur properti border */
            padding: 8px;
            border-radius: 5px;
        }

        .searchinput {
            padding: 5px;
            width: 600px;
            height: 30px;
            margin-left: 5px;
        }

        .btn-search,
        .btn-create {
            cursor: pointer;
            border: none;
            border-radius: 10px;
            background: #54BAB9;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
            color: white;
            padding: 10px;
            margin-left: 5px;
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ url('assets/admin/img/favicon.png') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/dashboardWarga.min.css') }}">
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
        <a class="active" href="{{ route('desa.index') }}">Data Warga</a>
        <a href="{{ route('desa.pengumuman') }}">Pengumuman</a>
        <a href="{{ route('desa.laporankeuangan') }}">Laporan Keuangan</a>
    </div>

    @yield('content')

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

        // Fungsi untuk menampilkan pop-up
        function showConfirmation() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }

        // Fungsi untuk menyembunyikan pop-up
        function hidePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }

        // Fungsi untuk menampilkan pop-up password
        function showPasswordPopup() {
            var passwordPopup = document.getElementById("passwordPopup");
            passwordPopup.style.display = "block";
        }

        // Fungsi untuk menutup pop-up password
        function closePasswordPopup() {
            var passwordPopup = document.getElementById("passwordPopup");
            passwordPopup.style.display = "none";
        }

        // Fungsi untuk submit password
        function submitPassword() {
            var passwordInput = document.getElementById("passwordInput");
            var password = passwordInput.value;

            if (password === "password123") {
                hidePopup();
                showSuccessPopup();
            } else {
                alert("Password yang Anda masukkan salah. Silakan coba lagi.");
            }
        }

        // Fungsi untuk menampilkan pop-up sukses
        function showSuccessPopup() {
            var successPopup = document.getElementById("successPopup");
            successPopup.style.display = "block";
        }

        // Fungsi untuk menyembunyikan semua pop-up
        function hidePopups() {
            var popups = document.getElementsByClassName("popup");
            for (var i = 0; i < popups.length; i++) {
                popups[i].style.display = "none";
            }
        }
    </script>

</body>

</html>
