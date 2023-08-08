@extends('layout.admin')

@section('content')
    <!-- diisi konten -->
    <h2>Dashboard Desa</h2>
    <div class="d-flex justify-content-around gap-2 flex-wrap">
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 100px;width: 300px;"></div>
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 100px;width: 300px;"></div>
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 100px;width: 300px;"></div>
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 100px;width: 300px;"></div>
    </div>
    </div>
    <div class="d-flex justify-content-around gap-2 flex-wrap pt-5">
        <div class="shadow p-3 mb-5 bg-white rounded col-7">
            <div class="d-flex flex-row flex-wrap justify-content-around">
                <div class="col-1">
                    <img src="assets/img/profildesa.png" class="ml-2" height="100px" width="100px" alt="profil desa">
                </div>
                <div class="col-9">
                    <h5 class="text-center">Profil Singkat Desa</h5>
                </div>
            </div>

        </div>
        <div class="shadow p-3 mb-5 bg-white rounded text-center col-3">
            <img src="assets/img/lokasi.png" height="170px" width="100%" alt="profil desa alt">
        </div>
    </div>
    <div class="d-flex justify-content-around flex-wrap pt-5">
        <div class="text-center">
            <p>
                Jumlah Penduduk <br> 1,900
            </p>
        </div>
        <div class="border border-dark"></div>
        <div class="text-center">
            <p>
                Kas Desa <br> Rp. 2.000.000,00
            </p>
        </div>
        <div class="border border-dark"></div>
        <div class="text-center">
            <p>
                Jumlah Penduduk Produktif <br> 1,900
            </p>
        </div>
    </div>
    <div class="d-flex justify-content-around gap-2 flex-wrap pt-5">
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 150px;width: 240px;"></div>
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 150px;width: 240px;"></div>
        <div class="shadow p-3 mb-5 bg-white rounded" style="height: 150px;width: 240px;"></div>
    </div>
    <!-- End of Main Content -->
@endsection
