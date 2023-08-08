@extends('layout.desa')
@section('content')
    <div id="main">
        <!-- <button class="openbtn" onclick="openNav()">☰</button>  -->
        <header>
            <div class="header-content">
                <span class="tombol" onclick="toggleSidebar()">&#9776;</span>
                <span class="tulisan-home">Data Warga</span>
            </div>
        </header>

        <div class="content">
            <div class="custom-box">
                <form action="{{ route('warga.search') }}" method="get">
                    <div class="search">
                        <input type="text" class="searchinput" name="search" placeholder="Cari NIK">
                        <button class="btn-search" type="submit">Search</button>
                    </div>
                </form>
                <button class="btn-create"><a href="{{ route('desa.tambahdatawarga') }}">Tambah</a></button>
            </div>


            <h2>Data Warga</h2>
            <table>
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @csrf
                    @foreach ($desa as $ds)
                        <tr>
                            <td>{{ $ds->NIK }}</td>
                            <td>{{ $ds->nama }}</td>
                            <td>{{ $ds->jk }}</td>
                            <td>
                                <a class="lihat-button" href="">Lihat</a>
                                <button class="delete-button">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
