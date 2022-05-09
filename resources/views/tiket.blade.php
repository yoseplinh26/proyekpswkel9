<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events BEM Online Ticketing {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{  asset('css/carousel.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{  asset('css/index.css') }}" rel="stylesheet">

    {{-- nav-login --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> --}}
    <script src="{{  asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Topbar Start -->
<!--     
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <img src="{{asset('img/7.png')}}">
            </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                 <img src="{{asset('img/7.png')}}">
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Events BEM</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            </div>
                            <div class="navbar-nav ml-auto py-0">
                                <ul class="navbar-nav ms-auto">
                                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                                <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                                <a href="{{ route('tiket') }}" class="nav-item nav-link">Ticket</a>
                                <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>

                                @auth
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                      <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button> 
                                      </form>
                                    </li>
                                  </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                </li>
                                @endauth
                              </ul>                      
                        </div>
                    </div>
                </nav>
                <!-- ======= Hero Section ======= -->

<!-- Content ============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">
            
		<div class="col_two_third portfolio-single-image nobottommargin">   
<img src="{{asset('img/kopi sore.jpeg')}}">
		</div>

		<div class="col_one_third portfolio-single-content col_last nobottommargin">
\

            <div class="fancy-title title-bottom-border">
                <h2>Kopi Sore</h2>
            </div>

        <ul class="portfolio-meta bottommargin">
            <li><span><i class="icon-user"></i>Tema:</span> LLALLALALALLALALALA</li>
            <li><span><i class="icon-calendar3"></i>Lokasi</span> Kafetaria</li>
            <li><span><i class="icon-lightbulb"></i>Tanggal Pelaksanaa:</span> 29 Mei 2022</li>
            <li><span><i class="icon-link"></i>Jumlah Kuota:</span>150 orang</li>
            <li><span><i class="icon-link"></i>Jumlah Pemesanan:</span></li>
            <li><span><i class="icon-link"></i>Deskripsi:</span>Event ini diselenggarakan oleh BEM untuk mempererat hubungan antar mahasiswa</li>
        </ul>
        </div>
            </div>
</div>
</section>

