@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      {{-- @php
        var_dump($errors);
      @endphp --}}
      <!-- Begin Page Content -->
      <div class="container-fluid">
        @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        @if (session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
        @endif
        <h2>Edit Profile</h2>
        <form action="{{ route('warga.update') }}" method="POST"> @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="">Current Password</label>
            <input type="password" class="form-control" id="currentPassword" name="currentPassword">
            @if ($errors->has('currentPassword'))
              <div class="text-red">
                {{ $errors->first('currentPassword') }}
              </div>
            @endif
          </div>
          <div class="mb-3">
            <label for="">New Password</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword">
            @if ($errors->has('newPassword'))
              <div class="text-red">
                {{ $errors->first('newPassword') }}
              </div>
            @endif
          </div>
          <div class="mb-3">
            <label for="">Confirm New Password</label>
            <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation">
            @if ($errors->has('newPassword_confirmation'))
              <div class="text-red">
                {{ $errors->first('newPassword_confirmation') }}
              </div>
            @endif
          </div>
          <div class="text-center mt-2">
            <button type="submit" class="btn px-3 text-white rounded" style="background-color: #54BAB9;">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
