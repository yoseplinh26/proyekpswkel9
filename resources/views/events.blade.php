
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
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <img src="{{asset('img/logo.jpeg')}}">
            </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
                   
                  
                </a>
               
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
                        <!-- <div class="navbar-nav mr-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ route('tiket') }}" class="nav-item nav-link">Ticket</a>
                            <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                        </div> -->
                        <div class="navbar-nav ml-auto py-0">
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

                </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Website<br>Event BEM Online Ticketing</h1>
      <h2>Come and Join Us</h2>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="content">
            <img src="{{asset('img/depsenbud.png')}}" width="110px" height="90px">
              <h5>Departemen Seni dan Budaya</h5>
            </div>
          </div>
        </section>
        </main> -->


    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h3>Apa yah<br>Tujuan diadakannya event BEM?</h3>
          <p>Tujuan dari diadakannya event BEM ini yaitu untuk menjalin hubungan sesama mahasiswa di 
            kampus IT DEL. Dengan landasan yang selalu diterpkan yaitu <bold>MarTuhan, marRoha, dan marBisuk</bold> menjadikan penting nya bagi mahasiswa
            dikampus dan diasrama untuk menjalin hubungan yang erat dan tali persahabatan yang kuat dengan pertemanan yang
            kuat akan menjadikan relasi yang baik pula kedepannya. Dan juga event ini tidak hanya menguatkan pertemanan.</p>
            <p>Event ini juga meningkatkan bakat seseorang untuk menampilkannya didepan umum dan dapat mengembangkan setiap bakat yng dimiliki oleh masing-masing mahasiswa</p>
        <br>  <h4>Penjelasan Mengenai Event BEM</h4>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Music Corner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Kopi Sore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Festival Budaya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pentas Budaya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Podcast</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Music Corner</h3>
                    <p class="fst-italic">Event Music Corner merupakan salah satu kegiatan yang diselenggarakan oleh BEM. Event music corner ini merupakan event yang dilaksanakan oleh setiap mahasiswa Institut Teknologi DEL.
                    </p>
                    <p>Music corner dilaksanakan sesuai dengan namanya yaitu “Corner” yang dilaksanakan di corner yang ada di kampus It Del. Pada kegiatan ini setiap mahasiswa dapat menampilkan setiap bakat yang dimiliki. Banyak kegiatan yang diadakan seperti bernyanyi, standup comedy, bermain music dan masih banyak kegiatan lainnya.</p>
                      <p> Tujuan dari diadakan nya event music corner ini adalah untuk meningkat kan bakat mahasiswa dan bermanfaat juga untuk membangun sosial hubungan antara sesama mahasiswa.
                      </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/music.png')}}" alt="" class="img-fluid">
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kopi Sore</h3>
                    <p class="fst-italic">Festival event kopi sore merupakan kegiatan mahasiswa yang dilaksanakan oleh BEM. </p>
                    <p>Sesuai dengan namanya pada festival ini mahasiswa akan menikmati minuman hangat sambil berkumpul bersama sesama mahasiswa. Pada festival ini tidak hanya menikmati kopi atau minuman hangat saja, mahasiwa juga disuguhkan dengan hiburan dipanggung yang biasanya dilaksanakan di lapangan napitupulu. Mahasiswa dapat bernyanyi bersama menikmati hangat nya minuman yang disediakan. Kegiatan ini juga menjalin hungungan mahasiswa menjadi erat dan tetap kuat. Mahasiswa dapat menikmati nikmat nya hidnagan minuman yang disediakan, berkumpul bersama teman antar sesama mahasiswa dan menikmati suasana sore hari indah. 
                    </p>
                    <p>Pada event ini juga ada games yang menarik juga untuk  diselenggarakan. Game ini dilaksanakan untuk menjaga dan mempererat kekompakan mahasiswa untuk meraih kemenangan. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('img/kopi sore.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Festival Budaya</h3>
                    <p class="fst-italic">Event Festival Budaya merupakan kegiatan yang diselenggarakan oleh BEM. Kegiatan ini sering dilaksanakan di Gedung Serbaguna Del.</p>
                    <p>Kegiatan ini meruapakan event yang meriah dikarenakan seluruh mahasiswa dapat mengikuti event ini. Festival budaya ini juga sangat seru dan menarik juga dimana banyak kegiatan yang diadakan seperti bazaar, penampilan tor-tor batak, penampilan tari tari dari beberapa budaya, selain pertunjukan pertujukan yang diadakan, festival budaya juga mengadakan beberapa lomba yang sangat menarik yaitu lomba miniatur dan menggambar sketsa. Festival budaya ini sangat menarik untuk diikuti oleh mahasiswa. Tujuan diadakan nya festival ini adalah untuk tetap mencintai budaya terlebih budaya yang ada diwilayah kampus It Del yaitu batak.
                    </p>
                    <p>Selain untuk memelihara budaya batak saja event ini juga memelihara budaya budaya lain yang ada di Indonesia, mahasiswa juga dapat mengembangkan bakat yang dimiliki juga.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('img/fesbud.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pentas Budaya</h3>
                    <p class="fst-italic">Event pentas budaya ini dilaksanakan oleh BEM. Kegiatan ini dilangsungkan di gedung serbaguna Del. Pentas ini juga hampir sama dengan festival budaya.</p>
                    <p>Tetapi pentas budaya ini juga tak kalah menarik juga, pada festival yang diselenggarakan ini terdapat acara Bazaar, fashion show, pameran, dan pertunjukan music juga yang dari semua kegiatan ini diselenggarakan oleh mahasiwa It Del. Selain itu juga pentas budaya ini mengadakan perlombaan perlombaan yang menarik juga yaitu perlombaan draw and paint, perlombaan scrabble yang mana ini di perlombaan yang diadakan ini melatih kekompakan mahasiswa dan kemampuan mahasiswa dibidang bahasa inggris juga yaitu perlombaan scrable.
                    </p>
                    <p> Banyak juga acara acara yang baru tentunya yang akan diakan oleh BEM yang dapat diikuti oleh setiap mahasiswa.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('img/pentas.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Podcast</h3>
                    <p class="fst-italic">Festival Kopi Sore merupakan salah satu kegiatan mahasiswa IT DEL yang dilakukan di lingkungan kampus IT DEl</p>
                    <p>Pada kegiatan Kopi Sore ini mahasiswa-mahasiswi IT DEL berkumpul bersama pada sore hari di tempat yang ditentukan
                      untuk bersantai dan menikmati secangkir kopi gratis yang sudah disediakan. Bukan hanya menikmati kopi fratis, mahasiswa-mahasiswi yang bergabung memanfaatkan waktu yang ada untuk berbincang ria dan melepas penat dari lelahnya kegiatan perkuliahan. Kegiatan ini juga menyediakan sebuah panggung kecil untuk orang yang bersedia menyumbangkan bakat nya dengan bernyanyi untuk menghidupkan suasana sore hari.
                    </p>
                    <p>Event Kopi Sore ini sangat bermanfaat di kalangan mahasiswa-mahasiswi selain sebagai wadah untuk refreshing, dapat juga menumbuhkan keakraban antar sesama</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/podcast.jpeg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
<hr>
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Berkisa Team-09</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="">Berkisa Team</a>
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

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>