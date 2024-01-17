<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PeminjamanBarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\JadwalKegiatanController;
use App\Http\Controllers\Kegiatan_wargaController;
use App\Http\Controllers\LaporanKegiatanController;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\RtRwController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WajibLaporController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Models\Artikel;
use App\Models\ArtikelImages;
use App\Models\Galeri;
use App\Models\Warga;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
    $cover = [];
    foreach ($artikel as $key => $value) {
        $cover[$key] = ArtikelImages::where('artikel_id', $value->id_artikel)->value('name');
    }

    return view('landing', compact('artikel', 'cover'));
});

Route::get('/artikel', function () {

    $artikel = Artikel::orderBy('created_at', 'desc')->paginate(8);
    $cover = [];
    foreach ($artikel as $key => $value) {
        $cover[$key] = ArtikelImages::where('artikel_id', $value->id_artikel)->value('name');
    }

    return view('landingArtikel', compact('artikel', 'cover'));
});

Route::get('/umkm', function () {
    return view('landingUMKM');
});

Route::get('/galeri', function () {

    $galeri = Galeri::orderBy('created_at', 'desc')->get();

    return view('landingGaleri', compact('galeri'));
});

Route::get('/artikel/{id}', function ($id) {

    $artikel = Artikel::where('id_artikel', $id)->first();
    $gambar = ArtikelImages::where('artikel_id', $id)->get();

    return view('detailArtikel', compact('artikel', 'gambar'));
})->name('detailArtikel');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [DashboardController::class, 'indexAdmin']);

    Route::get('/admin/desa', [DesaController::class, 'index'])->name('desa.index');
    Route::get('/admin/desa/tambahdatawarga', [DesaController::class, 'tambahdatawarga'])->name('desa.tambahdatawarga');
    Route::post('/admin/desa/store', [DesaController::class, 'store'])->name('desa.store');

    Route::get('/admin/desa/tambahdatalaporankeuangan', [DesaController::class, 'tambahdatalaporankeuangan'])->name('desa.tambahdatalaporankeuangan');
    Route::post('/admin/desa/storelaporan', [DesaController::class, 'storeLaporan'])->name('desa.storeLaporan');

    Route::get('/admin/desa/pengumuman', [DesaController::class, 'pengumuman'])->name('desa.pengumuman');
    Route::get('/admin/desa/pengumumanStore', [DesaController::class, 'pengumumanStore'])->name('desa.pengumumanStore');

    Route::get('/admin/desa/laporankeuangan', [DesaController::class, 'laporankeuangan'])->name('desa.laporankeuangan');

    Route::get('/admin/rt&rw', [RtRwController::class, 'index'])->name('rtrw.index');
    Route::get('/admin/rt&rw/pengumumanStore', [RtRwController::class, 'pengumumanStore'])->name('rtrw.pengumumanStore');
    Route::get('/admin/rt&rw/laportamu', [RtRwController::class, 'laporantamu'])->name('rtrw.laporantamu');
    Route::get('/admin/rt&rw/laportamu/edit', [RtRwController::class, 'edit'])->name('rtrw.edit');

    Route::get('/admin/kegiatan_warga', [Kegiatan_wargaController::class, 'index'])->name('kegiatanWarga.index');
    Route::get('/admin/kegiatan_warga/detail/{id}', [Kegiatan_wargaController::class, 'Detailjadwalkegiatan'])->name('kegiatanWarga.detail');

    Route::get('/admin/kegiatan_warga/banksampah', [Kegiatan_wargaController::class, 'banksampah'])->name('kegiatanWarga.banksampah');
    Route::get('/admin/kegiatan_warga/jadwalkegiatan', [Kegiatan_wargaController::class, 'jadwalkegiatan'])->name('kegiatanWarga.jadwalkegiatan');
    Route::get('/admin/kegiatan_warga/inputbanksampah', [Kegiatan_wargaController::class, 'inputbanksampah'])->name('kegiatanWarga.inputbanksampah');
    Route::post('/admin/kegiatan_warga/inputbanksampah/store', [Kegiatan_wargaController::class, 'store'])->name('kegiatanWarga.store');
    Route::get('/admin/kegiatan_warga/jadwalkegiatan/detail/{id}', [Kegiatan_wargaController::class, 'Detailumkm'])->name('kegiatanWarga.Detailumkm');
    Route::put('/admin/kegiatan_warga/jadwalkegiatan/update', [Kegiatan_wargaController::class, 'Updatejadwalkegiatan'])->name('kegiatanWarga.update');


    Route::prefix('main')->group(function () {

        Route::get('/', [DashboardController::class, 'indexWarga'])->name('dashboardWarga');

        Route::name('peminjaman_barang.')->prefix('peminjamanbarang')->group(function () {
            Route::get('/', [PeminjamanBarangController::class, 'index'])->name('index');
            Route::get('create', [PeminjamanBarangController::class, 'create'])->name('create');
            Route::post('store', [PeminjamanBarangController::class, 'store'])->name('store');
        });

        Route::name('jadwal_kegiatan.')->prefix('jadwalkegiatan')->group(function () {
            Route::get('/', [JadwalKegiatanController::class, 'index'])->name('index');
            Route::get('create', [JadwalKegiatanController::class, 'create'])->name('create');
            Route::post('store', [JadwalKegiatanController::class, 'store'])->name('store');
        });

        Route::name('wajib_lapor.')->prefix('wajiblapor')->group(function () {
            Route::get('/', [WajibLaporController::class, 'index'])->name('index');
            Route::get('laporTamu', [WajibLaporController::class, 'laporTamu'])->name('laporTamu');
            Route::get('laporkan', [WajibLaporController::class, 'laporkan'])->name('laporkan');
            Route::post('store', [WajibLaporController::class, 'store'])->name('store');
            Route::post('storeLaporan', [WajibLaporController::class, 'storeLaporan'])->name('storeLaporan');
            Route::put('update', [WajibLaporController::class, 'update'])->name('update');
        });

        Route::name('umkm.')->prefix('umkm')->group(function () {
            Route::get('/', [UmkmController::class, 'index'])->name('index');
            Route::get('create', [UmkmController::class, 'create'])->name('create');
            Route::post('store', [UmkmController::class, 'store'])->name('store');
            Route::get('edit/{id}', [UmkmController::class, 'edit'])->name('edit');
            Route::put('update', [UmkmController::class, 'update'])->name('update');
            Route::delete('delete', [UmkmController::class, 'destroy'])->name('destroy');
        });

        Route::get('bank_sampah', [BankSampahController::class, 'index'])->name('bank_sampah.index');
        Route::get('bank_sampah/data', [BankSampahController::class, 'data'])->name('bank_sampah.data');
        Route::post('bank_sampah/store', [BankSampahController::class, 'store'])->name('bank_sampah.store');
        Route::get('jadwal_pengambilan', [BankSampahController::class, 'jadwal'])->name('bank_sampah.jadwal');

        Route::get('pengumuman/index', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::get('pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        Route::post('pengumuman/store', [PengumumanController::class, 'store'])->name('pengumuman.store');

        Route::get('laporan_kegiatan', [LaporanKegiatanController::class, 'index'])->name('laporan_kegiatan.index');
        Route::get('laporan_kegiatan/create', [LaporanKegiatanController::class, 'create'])->name('laporan_kegiatan.create');
        Route::get('laporan_kegiatan/store', [LaporanKegiatanController::class, 'store'])->name('laporan_kegiatan.store');

        Route::name('artikel.')->prefix('artikel')->group(function () {
            Route::get('/', [ArtikelController::class, 'index'])->name('index');
            Route::get('create', [ArtikelController::class, 'create'])->name('create');
            Route::post('store', [ArtikelController::class, 'store'])->name('store');
            Route::get('edit/{id}', [ArtikelController::class, 'edit'])->name('edit');
            Route::post('update', [ArtikelController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [ArtikelController::class, 'destroy'])->name('destroy');
            Route::get('deleteGambar/{id}', [ArtikelController::class, 'destroyGambar'])->name('destroyGambar');
        });

        Route::name('galeri.')->prefix('galeri')->group(function () {
            Route::get('/', [GaleriController::class, 'index'])->name('index');
            Route::post('store', [GaleriController::class, 'store'])->name('store');
            Route::get('delete/{id}', [GaleriController::class, 'destroy'])->name('destroy');
        });

        Route::name('warga.')->prefix('warga')->group(function () {
            Route::get('/', [WargaController::class, 'index'])->name('index');
            Route::get('create', [WargaController::class, 'create'])->name('create');
            Route::post('store', [WargaController::class, 'store'])->name('store');
            Route::get('detail/{id}', [WargaController::class, 'detail'])->name('detail');
            Route::get('edit', [WargaController::class, 'edit'])->name('edit');
            Route::put('update', [WargaController::class, 'update'])->name('update');
            Route::post('destroy', [WargaController::class, 'destroy'])->name('destroy');
        });
    });
});
