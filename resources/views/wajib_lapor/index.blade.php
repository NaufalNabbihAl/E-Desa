@extends('layout.warga')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">Tamu Wajib Lapor</h2>
        <div class="d-flex justify-content-around my-4">
            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">
                <form action="{{ route('wajib_lapor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3 rounded w-100"
                        style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                        <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">
                            Laporkan Tamu</h5>
                        <div class="d-flex justify-content-between flex-wrap w-100 px-3">
                            <label for="nama" class="form-label" style="color: #387372;">KTP</label>
                            <input id="nama" type="file" class="form-control h-100" name="ktp" required>
                            <br>
                            <label for="nama" class="form-label" style="color: #387372;">Terlapor
                                :</label>
                            <input id="nama" class="form-control h-100" name="terlapor" required>
                            <br>
                            <label for="nama" class="form-label" style="color: #387372;">Lokasi
                                :</label>
                            <input id="nama" class="form-control h-100" name="lokasi" required>
                            <br>
                            <label for="nama" class="form-label" style="color: #387372;">Tanggal
                                :</label>
                            <input type="date" id="nama" class="form-control h-100" name="tanggal" required>
                            <br>
                            <label for="nama" class="form-label" style="color: #387372;">Deskripsi Kejadian :</label>
                            <input id="nama" class="form-control h-100" name="deskripsi" required>
                            <div class="text-right w-100 my-3">
                                <button type="submit" class="btn rounded-pill text-white"
                                    style="background-color: #387372;">Laporkan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
