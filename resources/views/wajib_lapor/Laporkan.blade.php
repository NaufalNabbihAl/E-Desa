@extends('layout.warga')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporkan Warga</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3">
                        <div class="card" style="border: 1px solid #387372;">
                            <div class="card-header" style="background-color: #387372; color: white;">
                                Laporkan Kejadian
                            </div>
                            <div class="card-body">
                                <form action="{{ route('wajib_lapor.storeLaporan') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3" id="div-bukti">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label for="bukti" class="form-label">Bukti</label>
                                            </div>
                                            <div class="col text-right">
                                                <button class="btn btn-success" onclick="tambahInput()"
                                                    type="button">Tambah</button>
                                            </div>
                                        </div>
                                        <input type="file" class="form-control" id="bukti" name="bukti[]">
                                    </div>
                                    <div class="mb-3" id="div-tamu">
                                        <label for="tamu" class="form-label">Terlapor</label>
                                        <input type="text" class="form-control" id="tamu" name="terlapor[]">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="aldeskrispasan" class="form-label">Deskripsi Kejadian</label>
                                        <textarea name="deskripsi" id="deskrisp" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                    <button type="submit" class="btn ml-auto text-white"
                                        style="background-color: #387372;">Laporkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <script>
            function tambahInput() {
                $('#div-bukti').append('<input type="file" class="form-control mt-2" id="bukti" name="bukti[]">');
                $('#div-tamu').append('<input type="text" class="form-control mt-2" id="tamu" name="terlapor[]">')
            }
        </script>
    @endsection
