<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
  <main>
    <div class="d-flex flex-row justify-content-center">
      <div class="d-flex flex-column col-xl-5 col-lg-12 col-md-12 col-sm-12 px-2">
        <div style="background-color: #1B2855;border-radius: 0px 0px 20px 20px;" class="p-5 text-white">
          <h2 class="text-uppercase">E - DESA</h2>
          <p class="w-75 text-wrap mt-4">Masuk Terlebih Dahulu Untuk Mendapatkan Pengalaman Yang lebih Jauh
            lagi</p>
          <p class="text-wrap mt-4">Selamat Datang Kembali, Silahkan Login ke Akun Anda</p>
          @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
              {{ Session::get('error') }}
            </div>
          @endif
        </div>
        <div class="p-5">
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="NIK" class="form-label fw-bold">Username</label>
              <input type="text" class="form-control border border-black rounded-5" name="username" id="username"
                required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control border border-black rounded-5" name="password" id="password"
                required>
            </div>
            <div class="d-flex flex-row justify-content-between flex-wrap mt-4 px-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input border border-black" type="checkbox" id="ingatsaya" name="ingatsaya"
                  value="ingatsaya">
                <label class="form-check-label" for="ingatsaya">Ingat Saya</label>
              </div>
              <a class="text-decoration-none text-black" href="#">Pusat Bantuan</a>
              <a class="text-decoration-none text-black" href="#">Lupa Sandi ?</a>
            </div>
            <div class="d-flex flex-row justify-content-evenly flex-wrap mt-4">
              <button type="submit" class="btn rounded-4 col-5 fw-bold"
                style="background-color: lightskyblue;color: white;">Masuk</button>
            </div>
          </form>
        </div>
      </div>
      <div id="img" class="d-none d-xl-flex flex-column col-xl-7">
        <img src="{{ url('assets/img/login.png') }}" alt="" style="height: 100vh;">
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
