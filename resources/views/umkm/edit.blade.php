@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">UMKM</h2>
        <div class="d-flex justify-content-around my-4">
            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">
                <form action="{{ route('umkm.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $umkm->id }}">
                    <div class="my-3 rounded w-100 h-100"
                        style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                        <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">
                            Pengajuan UMKM</h5>
                        <div class="d-flex justify-content-around flex-wrap w-100 px-3">
                            <div class="my-2 mx-5">
                                <label for="nama" class="form-label" style="color: #387372;">Nama
                                    UMKM :</label>
                                <input type="text" id="nama" class="form-control" name="nama"
                                    value="{{ $umkm->nama }}">
                                <label for="nama" class="form-label" style="color: #387372;">Nomor WA :</label>
                                <input type=" text" id="nama" class="form-control" name="nowa"
                                    value="{{ $umkm->nowa }}">
                                <label for="nama" class="form-label" style="color: #387372;">Deskripsi :</label>
                                <input id="nama" class="form-control" name="deskripsi" value="{{ $umkm->deskripsi }}">
                            </div>
                            <div class="my-2 mx-5">
                                <label for="nama" class="form-label" style="color: #387372;">Link
                                    Tokopedia :</label>
                                <input id="nama" class="form-control" name="linkTP" value="{{ $umkm->linkTP }}">
                                <p style=" color: #387372;">*jika ada</p>
                                <label for="nama" class="form-label" style="color: #387372;">Link
                                    Shoope :</label>
                                <input id="nama" class="form-control" name="linkSP" value="{{ $umkm->linkSP }}">
                                <p style=" color: #387372;">*jika ada</p>
                                <label for="nama" class="form-label" style="color: #387372;">Masukkan Gambar :</label>
                                <input id="nama" type="file" class="form-control" name="gambar"
                                    placeholder="Pilih Gambar">
                            </div>
                            <div class=" text-right w-100 my-4">
                                <button class="btn rounded-pill text-white" type="submit"
                                    style="background-color: #387372;">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
