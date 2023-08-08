@extends('layout.rt&rw')
@section('content')
    <div id="main">
        <!-- <button class="openbtn" onclick="openNav()">☰</button>  -->
        <header>
            <div class="header-content">
                <span class="tombol" onclick="toggleSidebar()">&#9776;</span>
                <span class="tulisan-home">Daftar Laporan Tamu</span>
            </div>
        </header>

        <div class="content">
            <h2>Daftar Laporan Tamu</h2>

            <div class="container-detail-tamu">
                <div class="custom-box-detail-tamu">
                    <a class="tanggal">Sabtu, 28 Mei 2022</a>
                    <div class="text-container">
                        <a class="top">Pelapor</a>
                        <a class="bottom">Agus</a>
                    </div>

                    <div class="text-container">
                        <a class="top">Terlapor</a>
                        <a class="bottom">Agus</a>
                    </div>
                    <div class="text-container">
                        <a class="top">Alamat</a>
                        <a class="bottom">Gang Mawar</a>
                    </div>
                    <div class="text-container">
                        <a class="top">Deskripsi</a>
                        <a class="bottom">Tamu dari Luar Kota menginap</a>
                    </div>
                    <div class="garis-pembatas-detail"></div>
                    <div class="detail-status">
                        <a class="text-status">Status</a>
                        <button class="menunggu-button">Menunggu</button>
                    </div>
                    <div class="garis-pembatas-detail"></div>
                    <div class="detail-status">
                        <a class="text-status">Konfirmasi</a>
                    </div>
                    <div class="buttonkonfirmasi">
                        <button class="confirm-button">Terima</button>
                        <button class="deny-button">Tolak</button>
                    </div>
                </div>
                <div class="container-detail-tamu">
                    <div class="custom-box-detail-tamu">
                        <a class="tanggal">Sabtu, 28 Mei 2022</a>
                        <div class="text-container">
                            <a class="top">Pelapor</a>
                            <a class="bottom">Bambang</a>
                        </div>

                        <div class="text-container">
                            <a class="top">Terlapor</a>
                            <a class="bottom">Bambang</a>
                        </div>
                        <div class="text-container">
                            <a class="top">Alamat</a>
                            <a class="bottom">Gang Mawar</a>
                        </div>
                        <div class="text-container">
                            <a class="top">Deskripsi</a>
                            <a class="bottom">Tamu dari Luar Kota menginap</a>
                        </div>
                        <div class="garis-pembatas-detail"></div>
                        <div class="detail-status">
                            <a class="text-status">Status</a>
                            <button class="menunggu-button">Menunggu</button>
                        </div>
                        <div class="garis-pembatas-detail"></div>
                        <div class="detail-status">
                            <a class="text-status">Konfirmasi</a>
                        </div>
                        <div class="buttonkonfirmasi">
                            <button class="confirm-button">Terima</button>
                            <button class="deny-button">Tolak</button>
                        </div>
                    </div>
                    <div class="container-detail-tamu">
                        <div class="custom-box-detail-tamu">
                            <a class="tanggal">Sabtu, 28 Mei 2022</a>
                            <div class="text-container">
                                <a class="top">Pelapor</a>
                                <a class="bottom">Tejo</a>
                            </div>

                            <div class="text-container">
                                <a class="top">Terlapor</a>
                                <a class="bottom">Tejo</a>
                            </div>
                            <div class="text-container">
                                <a class="top">Alamat</a>
                                <a class="bottom">Gang Mawar</a>
                            </div>
                            <div class="text-container">
                                <a class="top">Deskripsi</a>
                                <a class="bottom">Tamu dari Luar Kota menginap</a>
                            </div>
                            <div class="garis-pembatas-detail"></div>
                            <div class="detail-status">
                                <a class="text-status">Status</a>
                                <button class="menunggu-button">Menunggu</button>
                            </div>
                            <div class="garis-pembatas-detail"></div>
                            <div class="detail-status">
                                <a class="text-status">Konfirmasi</a>
                            </div>
                            <div class="buttonkonfirmasi">
                                <button class="confirm-button">Terima</button>
                                <button class="deny-button">Tolak</button>
                            </div>
                        </div>
                        <!-- Tambahkan custom box lainnya di sini -->
                    </div>






                    <div id="popup" class="popup">
                        <p>Apakah Anda yakin akan menghapus data ini?</p>
                        <div class="center-horizontal">
                            <button class="confirm-button" onclick="showPasswordPopup()">Ya</button>
                            <button class="deny-button" onclick="hidePopup()">Tidak</button>
                        </div>
                    </div>

                    <div id="passwordPopup" class="popup" style="display: none;">
                        <h2>Masukkan password keamanan:</h2>
                        <input type="password" id="passwordInput" class="password-input">
                        <div class="button-container">
                            <button class="confirm-button" onclick="submitPassword()">Submit</button>
                            <button class="deny-button" onclick="closePasswordPopup()">Batal</button>
                        </div>
                    </div>

                    <div id="successPopup" class="popup" style="display: none;">
                        <!-- <img src="./assets/img/ceklis.png" alt="Success Image" class="success-image"> -->
                        <p>Data berhasil dihapus.</p>
                        <div class="center-horizontal">
                            <button class="confirm-button" onclick="hidePopups()">OK</button>
                        </div>
                    </div>

                </div>

            </div>
        @endsection
