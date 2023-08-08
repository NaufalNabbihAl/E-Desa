@extends('layout.warga')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">UMKM</h2>
        <div class="d-flex justify-content-around my-4">
            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">
                <form action="{{ route('umkm.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" my-3 rounded w-100 h-100"
                        style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                        <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">Ajukan</h5>
                        <div class="d-flex justify-content-around flex-wrap w-100 px-3">
                            <div class="my-2 mx-5">
                                <label for="nama" class="form-label" style="color: #387372;">Nama UMKM :</label>
                                <input id="nama" class="form-control" name="nama" required>
                                <label for="nama" class="form-label" style="color: #387372;">Nomor WA :</label>
                                <input id="nama" class="form-control" name="nowa" required>
                                <label for="nama" class="form-label" style="color: #387372;">Deskripsi :</label>
                                <input id="nama" class="form-control" name="deskripsi" required>
                            </div>
                            <div class="my-2 mx-5">
                                <label for="nama" class="form-label" style="color: #387372;">Link Tokopedia :</label>
                                <input id="nama" class="form-control" name="linkTP">
                                <p style="color: #387372;">*jika ada</p>
                                <label for="nama" class="form-label" style="color: #387372;">Link Shoope :</label>
                                <input id="nama" class="form-control" name="linkSP">
                                <p style="color: #387372;">*jika ada</p>
                                <label for="nama" class="form-label" style="color: #387372;">Masukkan Gambar :</label>
                                <input id="nama" class="form-control" name="gambar" type="file"
                                    accept="img/png,img/jpg" placeholder="Pilih Gambar" required>
                            </div>
                            <div class="text-right w-100 my-4">
                                <button type="submit" class="btn rounded-pill text-white"
                                    style="background-color: #387372;">Kirim Pengajuan</button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
@endsection
