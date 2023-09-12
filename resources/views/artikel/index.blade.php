@extends('layout.warga')
@section('content')
  @if (Auth::user()->role != 'warga')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">List Artikel</h1>

              <a class="btn text-white mt-3 ml-auto" href="{{ route('artikel.create') }}" role="button"
                style="background-color: #387372; border-radius: 10px;">Tambahkan
                Artikel</a>

            </div><!-- /.col -->
            <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @csrf
                  @foreach ($artikel as $a)
                    <tr>
                      <td>{{ $a->judul }}</td>
                      <td>{{ $a->updated_at }}</td>
                      <td>
                        <a class="btn btn-primary" href="{{ route('artikel.edit', $a->id_artikel) }}"
                          role="button">Edit</a>
                        <form action="{{ route('artikel.destroy', $a->id_artikel) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    </div>
  @endif
@endsection
