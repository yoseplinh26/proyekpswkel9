<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Events BEM Online Ticketing {{ $title }}</title>
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
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">  

            </div>
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
                        <div class="navbar-nav ml-auto py-5">
                            <ul class="navbar-nav ms-auto">
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ route('tiket') }}" class="nav-item nav-link">Ticket</a>
                            <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                        </div>
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
                <br>
                <br>
                <br>            
<section id="hero">
<div class="col-lg-5">
      <h1>Welcome to Website<br>Event BEM Online Ticketing</h1>
      <h2>Come and Join Us</h2>
     
    </div>
  </section>
  <br>
  <!-- End Hero -->
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa ajasih event yang ada di BEM?</h3>
              <p>
               Event yang diselenggarakan oleh BEM merupakan event yang menarik untuk menjalin hubungan sesama mahasiswa di IT DEL
              </p>
              <div class="text-center">
               <!-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
              </div>
            </div>
          </div>
        </section>
        </main>


   
    <div class="container-fluid pt-5">
        <div class="row px-xl-1 pb-3">
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
              <img src="{{asset('img/masker.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Gunakan Masker</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/jarak.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Menjaga Jarak</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/hand.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Membawa Handsanitizer</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/cek suhu.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Melakukan Cek Suhu</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/batuk.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Menutup hidung jika batuk dan bersin</h5>
                </div>
            </div>
        </div>
    </div>















    
    <!-- Featured End -->
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="#" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="#" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    {{-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/contac.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>