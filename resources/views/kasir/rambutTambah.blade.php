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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

  <!-- ======= Header ======= -->
  <div>
  <header class="navbar navbar-dark sticky-top bg-dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">CUTMAN BARBERSHOP</a>

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
                        <a class="nav-link" aria-current="page" href="/dashboardadmin">
                            <span data-feather="file"></span> Data Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lihatUser">
                            <span data-feather="settings"></span> Data User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/produk">
                            <span data-feather="settings"></span> Data Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rambut" style="color:#4DAD6B">
                            <span data-feather="settings"></span> Data Potongan Rambut
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/barber">
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
        <h1 class="h2">Tambah Potongan Rambut</h1>
        </div>
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('rambutStore') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="namaModel" class="form-label">Nama Potongan Rambut</label>
                                        <input type="text" class="form-control" id="namaModel" name="namaModel" placeholder="Masukkan Nama Potongan Rambut" class="form-control">
                                        @error('namaModel')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fotoModel" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="fotoModel" name="fotoModel" placeholder="Masukkan Harga" class="form-control">
                                        @error('fotoModel')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </main>
    </div>
</div>

<script>
@if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif
</script>

