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
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/login-caas-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/about.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/form-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Fira+Code:wght@400&display=swap" rel="stylesheet">

</head>

<body style="background-color: #2c4d16;">

  @include('layouts/navbarCaasLogout')
  @section('navcaaslogout')
  @endsection

  <section id="landing-section">
    @if($Active===1 && $urut_tahap===$current_tahap)
    <div class="container">
      <div class="d-flex justify-content-center">
        <div style="padding:100px" class="checker-box">
          <div class="text-center text-nim-head">
            <span>Apakah kamu lulus Tahap {{ $namatahap }}?</span>
          </div>
          <div class="text-center pt-3 pb-3">
            <div>
              <span class="uppercase text-nim">
                {{$nama}}
              </span>
            </div>
            <div>
              <span class="text-nim">
                NIM : {{$nim}}
              </span>
            </div>
            @if($isLolos===1 && $urut_tahap===$current_tahap)
            <div class="pt-3 announce-text announce-box">
              <span>
                {!!nl2br(e($lulustext))!!}
              </span>
            </div>
            <div>
              @if($linktext!='-')
              <div class="d-flex justify-content-center pt-3">
                <a style="text-decoration: none" href="{{$linktext}}" target="_blank">
                  <button style="border-radius: 20px;" class="button-submit-link">
                    <div>
                      <div>
                        CLICK THIS LINK
                      </div>
                    </div>
                  </button>
                </a>
              </div>
              @endif
            </div>
            @else
            <div style="background-color:red" class="pt-3 announce-text announce-box">
            <span>
                {!!nl2br(e($failedtext))!!}
              </span>
            </div>
            @endif
          </div>
        </div>
      </div>
      @if($isPlotActive!==1 && $urut_tahap===$current_tahap && $isLolos===1 && $isPlotRun===1)
      <div class="d-flex justify-content-center pt-3">
        <a style="text-decoration: none" href="\listplot">
          <button class="home-button schedule-button">
            <div class="menu-box-home">
              <div>
                PILIH JADWAL
              </div>
            </div>
          </button>
        </a>
      </div>
      @else
      @endif
      <div class="d-flex justify-content-center pt-3">
        <a style="text-decoration: none" href="\home">
          <button class="home-button return-button">
            <div class="menu-box-home">
              <div>
                KEMBALI
              </div>
            </div>
          </button>
        </a>
      </div>
    </div>
    @else
    <div class="container p-5">
      <div class="d-flex justify-content-center">
        <div class="checker-box">
          <div class="text-center text-nim-head">
            <span>Recruitment Daskom 2022</span>
          </div>
          <div class="text-center pt-3 pb-3">
            <div class="pb-2">
              <span style="font-size:20px;font-weight: 400;color:black;" class="Welcome-text">
                Belum ada Pengumuman nih, pantau terus ya Official Account Line Recruitment Daskom Laboratory, Semangat!
              </span>
            </div>
            <div class="d-flex justify-content-center">
              <div>
                <a href="https://www.instagram.com/telu.daskom/" target="_blank"><img class="social-icon mx-2" src="{{ asset('/assets/instagram.png') }}" alt="ig"></a>
              </div>
              <div>
                <a href="https://timeline.line.me/user/_dbhqzOurXL1CbjNxhYBPzSbYBVWZFDnFa5_ashs" target="_blank"><img class="social-icon mx-2" src="{{ asset('/assets/line.png') }}" alt="ig"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center pt-3">
        <a style="text-decoration: none" href="\home">
          <button class="home-button return-button">
            <div class="menu-box-home">
              <div>
                KEMBALI
              </div>
            </div>
          </button>
        </a>
      </div>
    </div>
    @endif
  </section>

  @include('layouts/about')
  @section('aboutdaskom')
  @endsection

  @include('layouts/footer')
  @section('footer')
  @endsection

</body>

</html>