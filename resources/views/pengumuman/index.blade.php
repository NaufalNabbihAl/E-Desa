@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <div class="container-fluid">
            @csrf
            @foreach ($pengumuman as $pengumuman)
                <!-- diisi konten -->
                <div class="my-4 w-100 py-1 px-3 border border-info d-flex justify-content-between flex-wrap pb-4 pt-2"
                    style="background-color: #D9D9D9;">
                    <div class="d-flex flex-column ml-3 ">
                        <strong style="color: #387372; font-size: 20px;">{{ $pengumuman->judul }}</strong>
                        <br>
                        <p style="text-align: justify;">{{ $pengumuman->isi }}</p>
                        <span style="color: #387372; ">{{ $pengumuman->created_at }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
