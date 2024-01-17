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
    
    
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container" data-aos="fade-down">

        </br>
        </br>
</br>
        <div class="boxjam">
        <table class="table table-bordered">
          <center>
          <h3> BOOKING BERHASIL<h3>
          </center>
                        <thead class="table-success">
                            <tr>
                                <th>DATA PESAN</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        <td>
                          NAMA PEMESAN
                        </br>
                        </br>
                        </br>
                          MODEL POTONGAN RAMBUT
                        </br>
                        </br>
                        </br>
                          JAM
                        </br>
                        </br>
                        
                          MODEL POTONGAN RAMBUT
                        </td> 
                        <td>
                          <p>{{$users->fullName}}</P>
                        </br>
                          <p>{{$haircuts->namaModel}}</P>
                        </br>
                          <p>{{$booking->jamPesan}}</P>
                        </br>
                        <p>{{$booking->tanggalPesan}}</P>
                      </td>
                      

                        </tbody>
                    </table>
                    <center>
<p>Orderan anda sudah kami catat datanglah dengan waktu yang ditentukan 
</br>have a  nice day!!</p>
<a href="/dashboard"><button type="button" class="btn btn-primary">Kembali</button></a>
</center>
  </div>

        <style>
            
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