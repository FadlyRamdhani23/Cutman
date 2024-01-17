<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CUTMAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" >
        <a href="#hero">
      <h1><img href="#hero" src="assets/img/logobox.png" class="img-fluid animated" alt=""></a>
        <a href="#hero"><span>CUTMAN BARBERSHOP</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      @if (Route::has('login'))           
                    @auth
                    <x-dropdown-link :href="route('profile.edit')">
                            {{ Auth::user()->fullName }}
                        </x-dropdown-link> 
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >
                        <button class="button-register" href="{{ route('register') }}" >Register</button>
                        </a>
                            @endif
                    @endauth
            @endif
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="button-register" href="{{ route('register') }}" >Logout</button>
                        </form> 
            
            
        
            
    
  </header><!-- End Header -->

  <main id="main">
  <section id="pricing" class="pricing">
      <div class="container">
</br></br>
        <div class="row" data-aos="fade-down">
        <a href="/booking"><button type="button" class="btn btn-transparent"><i class="fas fa-arrow-left"></i>  Back</button></a>

          <h2> <center>PILIH POTONGAN RAMBUT</center></h2>
</br>
</br>
</br>
@foreach ($rambut as $getRambut)
<div class="col-lg-3 col-md-6">
  </br>
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>{{$getRambut->namaModel}}</h3>
              <img src="/fotorambut/{{$getRambut->fotoModel}}" class="img-fluid animated" alt=""></a>
              <div class="btn-wrap">
                <a href="/bookingKonfirmasi/{{$getjam}}/{{$getRambut->id }}" class="btn-buy">pilih</a>
              </div>
            </div>
          </div>
@endforeach

      </div>
    </section><!-- End Pricing Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
    <div class="container">
      <div class="copyright">
        <h2>Our Socials</h2>
      <div>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                </div>
        &copy; <strong><span>CUTMAN</span></strong>
      </div>
      <center>
    <p> 2022 </p>
</center>
    </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  </footer><!-- End Footer -->

</body>
<style>

  </style>
</html>