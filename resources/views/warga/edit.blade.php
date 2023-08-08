@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2>Data Diri</h2>
        <form action="{{ route('warga.update') }}" method="POST" style="background-color: rgba(84, 186, 185, 0.27)"> @csrf
            @method('PUT')
            <h3 class="text-center">Data Diri</h3>
            <div class="d-flex flex-wrap justify-content-around my-4">
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Nama :</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Anda"
                        name="nama" value="{{ $warga->nama }}">
                </div>
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Jenis Kelamin :</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Jenis Kelamin Anda"
                        name="jk" value="{{ $warga->jk }}">
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-around mb-4">
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Tempat,Tanggal Lahir Anda :</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Masukkan Tempat Tanggal Lahir Anda" name="tempat_tgl" value="{{ $warga->tempat_tgl }}">
                </div>
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Pekerjaan/Jenis Sekolah :</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Masukkan Pekerjaan/jenis Sekolah Anda" name="pekerjaan_sekolah"
                        value="{{ $warga->pekerjaan_sekolah }}">
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-around mb-4">
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Umur :</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Umur Anda"
                        name="umur" value="{{ $warga->umur }}">
                </div>
                <div class="d-flex flex-column col-6">
                    <label for="name" class="form-label">Pekerjaan Orang Tua :</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Masukkan Pekerjaan Orang Tua Anda" name="pekerjaanOrtu"
                        value="{{ $warga->pekerjaanOrtu }}">
                </div>
            </div>

            <div class="text-center mb-5">
                <p>Alamat Lengkap :</p>
            </div>
            <div class="d-flex justify-content-around gap-2 flex-wrap">
                <div class="d-flex flex-column">
                    <label for="#" class="form-label">Jalan</label>
                    <div class="shadow mb-5 bg-white rounded">
                        <input type="text" name="jalan" id="#" class="w-100 form-control" name="jalan"
                            value="{{ $warga->pekerjaanOrtu }}">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="#" class="form-label">Desa</label>
                    <div class="shadow mb-5 bg-white rounded">
                        <input type="text" name="desa" id="#" class="w-100 form-control"
                            value="{{ $warga->desa }}">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="#" class="form-label">Kecamatan</label>
                    <div class="shadow mb-5 bg-white rounded">
                        <input type="text" name="kecamatan" id="#" class="w-100 form-control"
                            value="{{ $warga->kecamatan }}">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="#" class="form-label">RT</label>
                    <div class="shadow mb-5 bg-white rounded">
                        <input type="text" name="rt" id="#" class="w-100 form-control"
                            value="{{ $warga->rt }}">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="#" class="form-label">RW</label>
                    <div class="shadow mb-5 bg-white rounded">
                        <input type="text" name="rw" id="#" class="w-100 form-control"
                            value="{{ $warga->rw }}">
                    </div>
                </div>
            </div>

            <div class="text-center mt-2">
                <button type="submit" class="btn px-3 text-white rounded"
                    style="background-color: #54BAB9;">Kirim</button>
            </div>
        </form>
    @endsection
