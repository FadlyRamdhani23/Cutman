<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CUTMAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
@include('sweetalert::alert')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" >
        <a href="#hero">
      <h1><img href="#hero" src="assets/img/logobox.png" class="img-fluid animated" alt=""></a>
        <a href="#hero"><span>CUTMAN BARBERSHOP</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#details">About us</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> 
          <li><a class="nav-link scrollto" href="#team">Barber</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Product</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#">
          @if (Route::has('login'))           
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <div>{{ Auth::user()->fullName }}</div></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >
                        <button class="button-register" href="{{ route('register') }}" >Register</button>
                        </a>
                            @endif
                    @endauth
                    
                
            @endif  
            <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li> 
                <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
            </li>

              
              <li>
              <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
            
            </li> 
            </ul>
          </li> 
            
        
    </nav><!-- .navbar -->
<i class="bi bi-list mobile-nav-toggle"></i>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">

  <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
             <h1>Let's Booking!!<!--<span>Barbershop</span>--></h1> 
            <h2>Kami bisa berikan potongan terbaik untukmu</h2>
            <div class="text-center text-lg-start">
              <a href="booking" class="btn-get-started scrollto">Get Booked</a>
            </div>
          
      
   
        
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
        <div class="row content">
          <div class="col-md-4 order-1 order-md-2"  data-aos="fade-left">
</br>

            <img src="assets/img/details-2.png" class="brewok" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <div class="section-title" data-aos="fade-up">
</br> 

            <h2> Cutman</h2> 
          <p>About Us</p>
            </div>
            <p class = "aboutus">
            CUTMAN TERBENTUK PADA TAHUN 2022.</br>
            CUTMAN MERUPAKAN TEMPAT CUKUR RAMBUT YANG </br>
            MENYEDIAKAN BERBAGAI TIPE POTONGAN RAMBUT. </br>
            INI LAH KAMI YANG PEDULI DENGAN KUALITAS HASIL POTONGAN </br>
            RAMBUT UNTUK PARA CUSTOMER KAMI.</br>
            RAMBUT ADALAH KANVAS KAMI </br>
            UNTUK MEMBUAT SEBUAH KARYA.</br></p>
          </div>
        </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Hasil Kami Mencukur</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


     <section id="testimonials" class="testimonials">
      <div class="container">
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profile</h2>
          <p>Our Barbers</p>
        </div>

        <div class="row" data-aos="fade-left">

          @foreach ($barber as $barbers)
          <div class="col-lg-3 col-md-6 mt-7 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="/fotobarber/{{$barbers->fotoBarber}}" class="img-fluid" alt="" style="width: 600px;"></div>
              <div class="member-info">
                <h4>{{$barbers->namaBarber}}</h4>
                <span>
                {{$barbers->descBarber}}
                </span>
                <div class="social">
                  <a href="https://www.twitter.com/{{$barbers->twitterBarber}}"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/{{$barbers->facebookBarber}}"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/{{$barbers->instagramBarber}}"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/{{$barbers->linkedinBarber}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Product</h2>
          <p>Cek Produk</p>
        </div>

        <div class="row" data-aos="fade-left">

        @foreach ($product as $getProduct)
<div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>{{$getProduct->namaProduct}}</h3>
              <img style = "width:873px heigth:885px"src ="/fotoProduct/{{$getProduct->fotoProduct}}" class="img-fluid animated" alt=""></a>
              <div class="btn-wrap">
                <a href="{{$getProduct->linkProduct}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
@endforeach
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Cutman@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 82119306016</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div> 

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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>