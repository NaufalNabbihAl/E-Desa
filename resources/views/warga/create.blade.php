@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambahkan Warga</h1>
          </div><!-- /.col -->
          <div class="container mt-3">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
                <form action="{{ route('warga.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row mb-3">
                    <div class="col">
                      <label for="">NIK</label>
                      <input type="text" class="form-control" id="NIK" name="NIK">
                    </div>
                    <div class="col">
                      <label for="">Role</label>
                      <select name="role" id="role" class="form-select">
                        <option value="warga">Warga</option>
                        <option value="rt">RT</option>
                        <option value="rw">RW</option>
                        <option value="admin">Admin</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="">Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="col">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="col">
                      <label for="">Umur</label>
                      <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select">
                      <option value="Laki-Laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="">Pekerjaan/Sekolah</label>
                    <input type="text" class="form-control" id="pekerjaan_sekolah" name="pekerjaan_sekolah">
                  </div>
                  <div class="mb-3">
                    <label for="">Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" id="pekerjaanOrtu" name="pekerjaanOrtu">
                  </div>
                  <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="jalan" name="jalan">
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="">RT</label>
                      <input type="text" class="form-control" id="rt" name="rt">
                    </div>
                    <div class="col">
                      <label for="">RW</label>
                      <input type="text" class="form-control" id="rw" name="rw">
                    </div>
                    <div class="col">
                      <label for="">Kecamatan</label>
                      <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                    <div class="col">
                      <label for="">Desa</label>
                      <input type="text" class="form-control" id="desa" name="desa">
                    </div>
                  </div>
                  <button type="submit" class="btn ml-auto text-white"
                    style="background-color: #387372;">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
@endsection
