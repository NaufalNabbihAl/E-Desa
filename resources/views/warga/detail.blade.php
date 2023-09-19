@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="col mb-3">
          <a class="btn text-white" href="{{ route('warga.index') }}" role="button"
            style="background-color: #387372; border-radius: 10px;">Kembali</a>
        </div>
        <div class="col-sm-6 mb-2">
          <h1 class="">Detail Warga</h1>
        </div><!-- /.col -->
        <div class="row">
          <div class="col-2 fw-semibold">
            NIK
          </div>
          <div class="col">
            : {{ $warga->NIK }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Nama
          </div>
          <div class="col">
            : {{ $warga->nama }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Tempat Tanggal Lahir
          </div>
          <div class="col">
            : {{ $warga->tempat_tgl }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Umur
          </div>
          <div class="col">
            : {{ $warga->umur }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Jenis Kelamin
          </div>
          <div class="col">
            : {{ $warga->jk }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Pekerjaan/Sekolah
          </div>
          <div class="col">
            : {{ $warga->pekerjaan_sekolah }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Pekerjaan Orang Tua
          </div>
          <div class="col">
            : {{ $warga->pekerjaanOrtu }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Alamat
          </div>
          <div class="col">
            : {{ $warga->jalan }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            RT/RW
          </div>
          <div class="col">
            : {{ $warga->rt }}/ {{ $warga->rw }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Desa
          </div>
          <div class="col">
            : {{ $warga->desa }}
          </div>
        </div>
        <div class="row">
          <div class="col-2 fw-semibold">
            Kecamatan
          </div>
          <div class="col">
            : {{ $warga->kecamatan }}
          </div>
        </div>
      </div>
    </div>
  @endsection
