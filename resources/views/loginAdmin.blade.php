<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Explore the Jungle with Daskom</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicon/favicon-16x16.png') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar-ex.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/footer.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/about.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Fira+Code:wght@400&display=swap" rel="stylesheet">

</head>

<body style="background-color: #2c4d16">
  <section id="nav-section">
    <nav class="navbar navbar-expand-lg dlor-navbar position-relative">
      <div class="container-fluid ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="leaf-img">
            <img width="75%" src="{{asset('/assets/daun.png')}}" alt="nav-leaf">
            <img class="monyet-img" width="17%" src="{{asset('/assets/monyet.png')}}" alt="nav-monk">
          </li>
        </ul>
        <div class="dlor-navright ">
          <ul class="navbar-nav dlor-navright position-fixed end-0 top-0 me-lg-4 mt-lg-4" id="dlor-toggler">
            <li class="nav-item-login">
              <a style="font-weight: 400;" class="nav-link text-center" href="/" tabindex="-1" aria-disabled="true">HOME</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>

  <section id="landing-section" class="px-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg car-img">
          <img class="img-fluid car-img mobile-hide " src="{{asset('/assets/car-sd.png')}}" alt="logo">
        </div>
        <div class="col-lg">
          <div class="checker-box">
            <div class="text-center text-nim-head">
              <span>Admin</span>
            </div>
            <div class="d-flex justify-content-center pt-3 pb-3">
              <form method="POST" action="/loginAdmin">
                @csrf
                <div>
                  <input maxlength="3" autocomplete="off" class="uppercase form-style" type="text" id="kodas" name="kodas" alt="ZZZ" placeholder="???" required>
                </div>
                <div class="pt-2">
                  <input minlength="3" class="form-style" type="password" id="nim" name="password" alt="NIM" placeholder="Password" required>
                </div>
                @error('password')
                <div class="text-center pt-1">
                  <span class="text-center" style="color: red;font-weight:600;font-size:20px">Password Minimal 8 Karakter</span>
                </div>
                @enderror
                @if (session('error'))
                <div class="text-center pt-1">
                  <span class="text-center" style="color: red;font-weight:500;font-size:20px">{{ session('error') }}</span>
                </div>
                @endif
                <div class="d-flex justify-content-center pt-3">
                  <button class="form-style-submit" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  @include('layouts/about')
  @section('aboutdaskom')
  @endsection

  @include('layouts/footer')
  @section('footer')
  @endsection

</body>

</html>