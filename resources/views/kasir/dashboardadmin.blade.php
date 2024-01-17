<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

  <!-- yajra require -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

  <!-- ======= Header ======= -->
  <div>
  <header class="navbar navbar-dark sticky-top bg-dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" style="background-color:#212529">CUTMAN BARBERSHOP</a>

    <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav id="navbar" class="navbar">
        <ul>
            <li>
      @if (Route::has('login'))           
                    @auth
                        <a href="#" class="text-sm text-gray-700 dark:text-gray-500 underline"> <div>{{ Auth::user()->fullName }}</div></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" >
                        <button class="button-register" href="{{ route('register') }}" >Register</button>
                        </a>
                            @endif
                    @endauth
            @endif 
            </li>
</br>
            <li>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="button-logout" href="{{ route('register') }}" >Logout</button>
                        </form>
            </li>
        </ul>
    </nav>
</header>

<!-- Nav -->

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

            <div>
                <br>
                <ul class="nav flex-column mb-2">
                    <li class="nav justify-content-center">
                        <img src="assets/img/logobox.png" alt="" height="180px">
                    </li>
                    <br>
                    <li class="nav-item">
                        <center><p><strong>CUTMAN</strong></p></center>
                    
                    </li>
                    <li class="nav-item">
                        <center><p>BARBERSHOP</p></center>
                    </li>
                    </li>
                </ul>
            </div>

            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color:#4DAD6B">
                            <span data-feather="file"></span> Data Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lihatUser">
                            <span data-feather="settings"></span> Data User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">
                            <span data-feather="settings"></span> Data Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rambut" >
                            <span data-feather="settings"></span> Data Potongan Rambut
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/barber">
                            <span data-feather="settings"></span> Data Barber
                        </a>
                    </li>
                
                </ul>
</br>
</br>
</br>
            </div>
        </nav>

        <!-- Nav -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Booking</h1>

            </div>
            <p align="left">    
            <a href="/bookingTambah"><button class="btn btn-success" href="/rambutTambah"> Tambah Data</button></a>
</p>
            <table class="table table-bordered table-hover" id="datatable">
   
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Potongan</th>
                        <th>tanggalpesan</th>
                        <th>jam pesan</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </main>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable({
            ajax: '{{ url("tampilBooking") }}',
            serverSide: false,
            processing: true,
            deferRender: true,
            type: 'GET',
            destroy: true,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'fullname', name: 'fullname'},
                {data: 'namaModel', name: 'namaModel'},
                {data: 'tanggalPesan', name: 'tanggalPesan'},
                {data: 'jamPesan', name: 'jamPesan'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
