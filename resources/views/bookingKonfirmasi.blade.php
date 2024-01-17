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
          
            <div>
    
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container" data-aos="fade-down">
</br>
</br>
</br>
<a href="/booking"><button type="button" class="btn btn-transparent"><i class="fas fa-arrow-left"></i>  Back</button></a>
        <div class="boxjam">
        <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>DATA PESAN</th>
                                <th></th>
                                
                                
                                
                            </tr>
                        </thead>

                        <tbody>
                          
                        <td>NAMA PEMESAN
</br>
</br>
                        EMAIL 
</br>
</br>
NOMOR HP
</br>
</br>
JAM
</br>
</br>
MODEL POTONGAN RAMBUT

                        </td> 
                        <td>
                          {{ Auth::user()->fullName }}
</br>
</br>
                          {{ Auth::user()->email }} 
</br>
</br>
                        {{ Auth::user()->phoneNumber }} 
</br>
</br>
                        {{$getjam}}
                        </br>
                        </br>
                        {{$haircuts->namaModel}}
                      </td>
                      
                        
                        </tbody>
                    </table>
                        
                        

                        
        
                        <div class="container">
                <div class="row justify-content-left">
                    <div class="col-md-8">
                        
                            
                                <form action="{{route('isiBooking')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <?php
                                    $time = '';
                                      if($getjam == 8){
                                        $time = '08:00:00';
                                      }elseif($getjam == 9){
                                        $time = '09:00:00';
                                      }elseif($getjam == 10){
                                        $time = '10:00:00';
                                      }elseif($getjam == 11){
                                        $time = '11:00:00';
                                      }elseif($getjam == 12){
                                        $time = '12:00:00';
                                      }elseif($getjam == 13){
                                        $time = '13:00:00';
                                      }elseif($getjam == 14){
                                        $time = '14:00:00';
                                      }elseif($getjam == 15){
                                        $time = '15:00:00';
                                      }elseif($getjam == 16){
                                        $time = '16:00:00';
                                      }elseif($getjam == 17){
                                        $time = '17:00:00';
                                      }elseif($getjam == 18){
                                        $time = '18:00:00';
                                      }elseif($getjam == 19){
                                        $time = '19:00:00';
                                      }elseif($getjam == 20){
                                        $time = '20:00:00';
                                      }
                                      ?>
                                  
      
                                        <input type="hidden" class="form-control" id="fullName" name="user_id" class="form-control" value="{{ Auth::user()->id }}" readonly>
                                  
                                  
                                        
                                        <input type="hidden" class="form-control" id="namaModel" name="haircuts_id" class="form-control" value="{{$haircuts->id}}" readonly>
                                  
                        
                                  
                                        
                                        <input type="hidden" class="form-control" id="tanggalPesan" name="tanggalPesan" placeholder="Masukkan Harga" class="form-control" value="{{  now()->toDateString('Y-m-d') }}">
                                  
                                  
                                       
                                        <input type="hidden" class="form-control" id="jamPesan" name="jamPesan" value='{{$time}}' class="form-control" readonly>
                                    
                                    <button type="submit" class="btn btn-success">KONFIRMASI BOOKING</button>    
                                    
                                  </form>
                            </div>
                        </div>
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
                width: 1000px;
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
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  </footer><!-- End Footer -->
</body>
<script>
swal({
  title: "Perhatian!",
  text: "Jika Anda menekan tombol Konfirmasi Booking, tidak bisa dibatalkan!",
  icon: "warning",
  button: "Iya, saya mengerti!",
});
</script>

</html>