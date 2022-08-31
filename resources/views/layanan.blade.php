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
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Layanan Pajak</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/about">Tentang</a></li>
                    <li><a class="active" href="/layanan">Layanan</a></li>
                    <li><a href="/contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            @if(Auth::check())
            <a href="{{route('dashboard')}}" class="btn get-started-btn ms-5">Dashboard</a>
            @else
            <button type="button" class="btn get-started-btn ms-5" data-bs-toggle="modal" data-bs-target="#register">Daftar</button>
            <button style="border-radius: 20px;" class="btn btn-outline-secondary ms-3" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
            @endif
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

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Layanan Kami</h2>
                <p>Layanan yang bisa kami berikan adalah pembayaran pajak PBB, BPTHB, Pajak Hotel, Pajak Restoran, Pajak Parkir, Pajak Hiburan, Pajak Penerangan, Pajak Reklame, Pajak Air Tanah dll. </p>
            </div>
        </div><!-- End Breadcrumbs -->
    </main><!-- End #main -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-25 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-building"></i>
                                <h4>Pajak Bumi dan Bangunan</h4>
                                <p>Pajak atas bumi dan/atau bangunan yang dimiliki dan dikuasai.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-house-door"></i>
                                <h4>Pajak Hotel</h4>
                                <p>Hotel adalah fasilitas penyedia jasa penginapan / peristirahatan.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-p-circle"></i>
                                <h4>Pajak Parkir</h4>
                                <p>Pajak atas penyelenggaraan tempat parkir di luar badan jalan.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-emoji-smile"></i>
                                <h4>Pajak Hiburan</h4>
                                <p>Pajak atas penyelenggaraan hiburan.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-lightbulb"></i>
                                <h4>Pajak Penerangan</h4>
                                <p>Pajak atas penggunaan tenaga listrik.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-cup-hot"></i>
                                <h4>Pajak Restoran</h4>
                                <p>Restoran adalah fasilitas penyedian makanan dan/atau minuman dengan dipungut bayaran</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-columns"></i>
                                <h4>BPTHB</h4>
                                <p>Bea Perolehan Hak atas Tanah dan Bangunan adalah perbuatan atau peristiwa hukum</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-back"></i>
                                <h4>Pajak Reklame</h4>
                                <p>Pajak atas penyelenggaraan Reklame</p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bi bi-droplet"></i>
                                <h4>Pajak Air Tanah</h4>
                                <p>Pajak atas pengambilan dan / atau pemanfaatan air</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

        </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Bapenda Kota Bandung</h3>
                        <p>
                            Jalan Wastukencana No 2,<br>
                            Babakan Ciamis, Kecamatan Sumur Bandung<br>
                            Kota Bandung<br><br>
                            <strong>Phone:</strong> +62 5861023849<br>
                            <strong>Email:</strong> bapenda@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/layanan">Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/contact">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
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
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>