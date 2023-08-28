@extends('layout.warga')
@section('content')
    <div id="main">

        <div class="content">
            <h2>Buat Pengumuman</h2>
            <div class="form-container">
                <div class="form-header"></div>
                <form action="{{ route('pengumuman.store') }}" method="post" onsubmit="validateForm()">
                    @csrf
                    <div class="form-group col-1">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" class="input-field"
                            placeholder="Masukkan judul pengumuman..." />
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi:</label>
                        <textarea id="isi" name="isi" class="textarea-field" rows="5" placeholder="Masukkan isi pengumuman..."></textarea>
                    </div>
                    <button type="submit" class="submit-button">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
