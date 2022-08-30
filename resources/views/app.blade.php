<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/landing/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/landing/css/style.css')}}" rel="stylesheet">
    <title>@yield('title', $title)</title>
</head>

<body>
    <div class="container">
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Layanan Pajak</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="active" href="#">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <button type="button" class="btn get-started-btn ms-5" data-bs-toggle="modal" data-bs-target="#register">Daftar</button>
            <button style="border-radius: 20px;" class="btn btn-outline-secondary ms-3" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>

            </div>
        </header>
        <main>
            @yield('content')
        </main>        
        <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pendaftaran akun layanan pajak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <form action="{{ route('register.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <div class="mb-3">
                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirm" />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
            <!-- ======= Hero Section ======= -->
            <section id="hero" class="d-flex justify-content-center align-items-center">
                <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                <h1>BPPD,<br>Layanan Pajak</h1>
                <h2>Kota Bandung</h2>
                <a class="btn-get-started" data-bs-toggle="modal" data-bs-target="#login">Bayar Sekarang !!!</a>
                                </div>
            </section><!-- End Hero -->
                <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/landing/img/s.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <main id="main">
        
        <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Masuk ke dashboard layanan pajak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="mb-3">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>