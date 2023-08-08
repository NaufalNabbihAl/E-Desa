@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">Peminjaman Barang</h2>
        <div class="d-flex justify-content-around my-4">
            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">
                <form action="{{ route('peminjaman_barang.store') }}" method="POST">
                    @csrf
                    <div class="my-3 rounded w-100 h-100"
                        style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                        <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">
                            Ajukan Peminjaman Barang</h5>
                        <div class="d-flex justify-content-around flex-wrap w-100 px-0">
                            <div class="my-2 mx-5" style="width: 500px;">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="nama" class="form-label" style="color: #387372;">
                                            Nama Barang :
                                        </label>
                                        <select class="form-select" name="id_barang" aria-label="Default select example">
                                            <option selected disabled>Open this select menu</option>
                                            @foreach ($barangs as $b)
                                                <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="nama" class="form-label" style="color: #387372;">
                                            Jumlah Barang :
                                        </label>
                                        <input id="nama" type="number" class="form-control" name="jumlah_pinjam"
                                            required>
                                        @if ($errors->any())
                                        @endif
                                        <div id="validationServer03Feedback" class="text-danger">
                                            {{ $errors->first('jumlah_pinjam') }}
                                            {{-- idjfoshfisdhghfdasdsad --}}
                                        </div>
                                    </div>
                                </div>
                                <label for="nama" class="form-label" style="color: #387372;">Keperluan Acara :</label>
                                <input id="nama" class="form-control" name="keperluan" required>
                                <label for="nama" class="form-label" style="color: #387372;">Tanggal Peminjaman
                                    :</label>
                                <div class="row">
                                    <div class="col-5">
                                        <input type="date" class="form-control" name="tanggal_pinjam" required>
                                    </div>
                                    <div class="col-1 text-center">
                                        -
                                    </div>
                                    <div class="col-5">
                                        <input type="date" class="form-control" name="tanggal_kembali" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right w-100 my-3 me-5">
                                <button type="submit" class="btn rounded-pill text-white"
                                    style="background-color: #387372;">Ajukan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // function alerts(e) {
        //     e.preventDefault();
        //     // Swal.fire({
        //     //     showConfirmButton: false,
        //     //     title: "Pengajuan Sedang Diproses",
        //     //     icon: "success"
        //     // })
        //     // var formData = new FormData(e.target);
        //     // fetch("{{ route('peminjaman_barang.store') }}", {
        //     //     method: 'POST',
        //     //     body: formData
        //     // });
        // }
    </script>
@endsection
