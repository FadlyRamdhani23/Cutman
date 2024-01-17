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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>
@include('sweetalert::alert')

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
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container" data-aos="fade-down">
</br>
</br>
</br>
<a href="/dashboard"><button class="btn btn-transparent"><i class="fas fa-arrow-left"></i>  Back</button></a>

    <div class="clock">
    <div class="date">
            </div>
            <div class="time"></div>
        </div>
</br>
        <div class="boxjam">
          <center>
          
                  
                        
                        <p>Waktu Yang Tersedia Hari Ini </p>    
                                    
                        <a href="{{ route('getHaircut',8) }}" >
                        <button type='submit' {{$disable}} class="button-register" >08:00</button>
                        </a>
                        <a href="{{ route('getHaircut',9) }}" >
                        <button type='submit' {{$disable1}} class="button-register" >09:00</button>
                        </a>
                        <a href="{{ route('getHaircut',10) }}" >
                        <button type='submit' {{$disable2}} class="button-register"  >10:00</button>
                        </a>
                        <a href="{{ route('getHaircut',11) }}" >
                        <button type='submit' {{$disable3}} class="button-register" >11:00</button>
                        </a>
                        <a href="{{ route('getHaircut',12) }}" >
                        <button type='submit' {{$disable4}} class="button-register" >12:00</button>
                        </a>
</br>
</br>
                        <a href="{{ route('getHaircut',13) }}" >
                        <button type='submit' {{$disable5}} class="button-register" >13:00</button>
                        </a>
                        <a href="{{ route('getHaircut',14) }}" >
                        <button type='submit' {{$disable6}} class="button-register" >14:00</button>
                        </a>
                        <a href="{{ route('getHaircut',15) }}" >
                        <button type='submit' {{$disable7}} class="button-register" >15:00</button>
                        </a>
                        <a href="{{ route('getHaircut',16) }}" >
                        <button type='submit' {{$disable8}} class="button-register" >16:00</button>
                        </a>
                        <a href="{{ route('getHaircut',17) }}" >
                        <button type='submit' {{$disable9}} class="button-register" >17:00</button>
                        </a>
                        </br>
</br>
                        <a href="{{ route('getHaircut',18) }}" >
                        <button type='submit' {{$disable10}} class="button-register" >18:00</button>
                        </a>
                        <a href="{{ route('getHaircut',19) }}" >
                        <button type='submit' {{$disable11}} class="button-register" >19:00</button>
                        </a>
                        <a href="{{ route('getHaircut',20) }}" >
                        <button type='submit' {{$disable12}} class="button-register" >20:00</button>
                        </a>
</center>

    </div>
</br>
</br>
</br>
</div>

        
        </div>
        <script>
            function clock() {
                var fullDate = new Date();
                var hours = fullDate.getHours();
                var minutes = fullDate.getMinutes();
                var seconds = fullDate.getSeconds();
                var date = fullDate.getDate();
                var month = fullDate.getMonth();
                var year = fullDate.getFullYear();
                var day = fullDate.getDay();
                var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
                var monthlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                var ampm = hours >= 12 ? 'pm' : 'am';
                hours = hours % 12;
                hours = hours ? hours : 12;
                hours = hours < 10 ? '0' + hours : hours;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                var time = hours + ":" + minutes + ":" + seconds + " " + ampm;
                var date = daylist[day] + " " + date + " " + monthlist[month] + " " + year;
                document.getElementsByClassName("time")[0].innerHTML = time;
                document.getElementsByClassName("date")[0].innerHTML = date;
                var t = setTimeout(clock, 500);
            }
            clock();
        </script>
        <style>
            .clock {
                
                color: #2F4155;
                box-shadow: 3px 2px 1px gray;
                font-family: 'Montserrat', sans-serif;
                width: 500px;
                margin: 0 auto;
                padding: 15px 10px ;
                border-radius: 5px;
                justify-content: center;
            }
            .boxjam{
                color: #2F4155;
                box-shadow: 3px 2px 5px gray;
                font-family: 'Montserrat', sans-serif;
                width: 600px;
                margin: 0 auto;
                padding: 15px 10px ;
                border:3px solid #
                border-radius: 5px;
                justify-content: center;
            }
            .date {
            font-size: 20px;
            font-weight: 600;
            text-align: center ;
            letter-spacing: 3px;
            justify-content: center;


            }
            .time {
                font-size: 25px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>


    </section><!-- End Details Section -->
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </footer><!-- End Footer -->
</body>

</html>