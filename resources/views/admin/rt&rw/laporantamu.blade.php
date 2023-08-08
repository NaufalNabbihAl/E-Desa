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
            <div class="custom-box">
                <table>
                    <thead>
                        <tr>
                            <th>NIK Pelapor</th>
                            <th>Terlapor</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($lapor as $lp)
                            <tr>
                                <td>{{ $lp->NIK }}</td>
                                <td>{{ $lp->terlapor }}</td>
                                <td>{{ $lp->tanggal }}</td>
                                <td>{{ $lp->lokasi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('rtrw.edit') }}" class="edit-button" ">Edit</a>
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
