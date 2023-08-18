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
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\RtRwController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WajibLaporController;
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
    return view('landing');
});

Route::get('/artikel', function () {
    return view('landingArtikel');
});

Route::get('/galeri', function () {
    return view('landingGaleri');
});

Route::get('/umkm', function () {
    return view('landingUMKM');
});

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

    Route::get('/warga', [DashboardController::class, 'indexWarga'])->name('dashboardWarga');
    Route::get('warga/search', [WargaController::class, 'search'])->name('warga.search');

    Route::get('/warga/edit/', [WargaController::class, 'edit'])->name('warga.edit');
    Route::put('/warga/update/', [WargaController::class, 'update'])->name('warga.update');

    Route::get('/warga/peminjamanbarang', [PeminjamanBarangController::class, 'index'])->name('peminjaman_barang.index');
    Route::get('/warga/peminjamanbarang/create', [PeminjamanBarangController::class, 'create'])->name('peminjaman_barang.create');
    Route::post('/warga/peminjamanbarang/store', [PeminjamanBarangController::class, 'store'])->name('peminjaman_barang.store');

    Route::get('/warga/jadwalkegiatan', [JadwalKegiatanController::class, 'index'])->name('jadwal_kegiatan.index');
    Route::get('/warga/jadwalkegiatan/create', [JadwalKegiatanController::class, 'create'])->name('jadwal_kegiatan.create');
    Route::post('/warga/jadwalkegiatan/store', [JadwalKegiatanController::class, 'store'])->name('jadwal_kegiatan.store');

    Route::get('/warga/wajib_lapor', [WajibLaporController::class, 'index'])->name('wajib_lapor.index');
    Route::get('/warga/wajib_lapor/laporTamu', [WajibLaporController::class, 'laporTamu'])->name('wajib_lapor.laporTamu');
    Route::get('/warga/wajib_lapor/laporkan', [WajibLaporController::class, 'laporkan'])->name('wajib_lapor.laporkan');
    Route::post('/warga/wajib_lapor/store', [WajibLaporController::class, 'store'])->name('wajib_lapor.store');
    Route::post('/warga/wajib_lapor/storeLaporan', [WajibLaporController::class, 'storeLaporan'])->name('wajib_lapor.storeLaporan');

    Route::get('/warga/umkm', [UmkmController::class, 'index'])->name('umkm.index');
    Route::get('/warga/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
    Route::get('/warga/umkm/edit/{id}', [UmkmController::class, 'edit'])->name('umkm.edit');
    Route::delete('/warga/umkm/delete', [UmkmController::class, 'destroy'])->name('umkm.destroy');
    Route::put('/warga/umkm/update', [UmkmController::class, 'update'])->name('umkm.update');
    Route::post('/warga/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');

    Route::get('/warga/bank_sampah', [BankSampahController::class, 'index'])->name('bank_sampah.index');
    Route::get('/warga/bank_sampah/data', [BankSampahController::class, 'data'])->name('bank_sampah.data');
    Route::get('/warga/jadwal_pengambilan', [BankSampahController::class, 'jadwal'])->name('bank_sampah.jadwal');

    Route::get('/warga/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

    Route::get('/warga/laporan_keuangan', [LaporanKeuanganController::class, 'index'])->name('laporan_keuangan.index');
});
