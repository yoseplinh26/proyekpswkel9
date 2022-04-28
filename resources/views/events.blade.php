
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
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('events') }}" class="nav-item nav-link">Events</a>
                            <a href="#" class="nav-item nav-link">Ticket</a>
                            <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <ul class="navbar-nav ms-auto">

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
<div id="rev_slider_ishop_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="default-slider" style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
        <div id="rev_slider_ishop" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
            <ul>    <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="5000" data-saveperformance="off" data-title="Latest Collections" style="background-image:url(images/field.jpg); background-size:cover;">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="0"
                    data-y="0"
                    data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn"><img src="images/slider/rev/shop/fruit.png" alt="fruit"></div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="570"
                    data-y="75"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff;">Silahkan cari supplier favorit anda</div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="570"
                    data-y="105"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff; max-width: 430px; line-height: 1.15;">Produk buah<br>terbaru</div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="570"
                    data-y="275"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff; max-width: 550px; white-space: normal;">Kami menyediakan para supplier &amp; dengan produk buah terbaik.</div>


                </li>
                <!-- SLIDE  -->
                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="5000"  data-saveperformance="off"  data-title="Messenger bags" style="background-image:url(images/petani.jpg); background-size:cover;">
                    <!-- LAYERS -->

                    <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="0"
                    data-y="0"
                    data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn"><img src="images/slider/rev/shop/vegetable.png" alt="fruit"></div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="570"
                    data-y="75"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff;">Silahkan cari Penyedia Sayur terbaik kami</div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="570"
                    data-y="105"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff; max-width: 430px; line-height: 1.15;">Sayuran Segar</div>

                    <div class="tp-caption ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="570"
                    data-y="275"
                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #fff; max-width: 430px; white-space: normal; line-height: 0.85;">Kami menyediakan para supplier dengan produk buah terbaik.</div>

                </li>
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

