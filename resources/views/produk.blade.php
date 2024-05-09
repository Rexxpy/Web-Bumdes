<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/produk.css">
    
    <title>Produk | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">
  
    <nav class="navbar navbar-expand-sm">
        <div class="container">
          <a class="navbar-brand">
            <img src="../image/logo mojo.png" alt="logo" width="15%">
            BUMDES TAWAR
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-4 dropdown">
                {{-- <a class="nav-link" aria-current="page" href="/">Profil</a> --}}
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/tentang">Tentang Bumdes</a>
                  <a class="dropdown-item" href="/sto">Struktur Organisasi</a>
                </div>
              </li>
              <li class="nav-item ms-4 dropdown">
                {{-- <a class="nav-link" aria-current="page" href="/">UMKM</a> --}}
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UMKM
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/produk">Produk</a>
                  <a class="dropdown-item" href="/jasa">Jasa</a>
                  <a class="dropdown-item" href="/wisata">Wisata</a>
                </div>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/kegiatan">Kegiatan</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/kontak">Kontak</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>

      <nav aria-label="breadcrumb">      
        <ol class="breadcrumb breadcrumb-chevron p-3">
          <li class="breadcrumb-item">
            <a class="link-body-emphasis" href="/">
              Home
            </a>
          </li>
          <li class="breadcrumb-item fw-semibold active" aria-current="page">
             UMKM Produk
          </li>
        </ol>
    </nav>
    
      <form action="/filter_produk" method="post">
        @csrf
      <div class="jenis mt-5">
        <div class="container">
          <div class="row" style="display:flex;justify-content: center">

              <div class="col-lg-3 m-4 p-3 btn"> 
                  <button style="position: absolute;top:24%;left:15%;" value="makanan" id="b-produk" name="b-produk"></button>
                  <img src="../image/makanan.png" alt="" srcset="" style="width: 20%;">
                  <h2 class="text-center"><b>Makanan</b></h2>
              </div>
              <div class="col-lg-3 m-4 p-3 btn">
                  <button style="position: absolute;top:24%;left:39.6%;" value="minuman" id="b-produk" name="b-produk"></button>
                  <img src="../image/minuman.png" alt="" srcset="" style="width: 20%">
                  <h2 class="text-center"><b>Minuman</b></h2>
              </div>
              <div class="col-lg-3 m-4 p-3 btn">
                  <button style="position: absolute;top:24%;left:64.3%;" value="kreasi" id="b-produk" name="b-produk"></button>
                  <img src="../image/kreasi.png" alt="" srcset="" style="width: 20%">
                  <h2 class="text-center"><b>Kreasi Desa</b></h2>
              </div>
              
            </div>
          </div>
      </div>

      <div class="produk">
        <div class="container">
          <div class="row">
            @foreach ($datas as $data)    
            <div class="col-md-4 col-sm-6 mt-5">
              <a href="{{route('deskripsi_produk', [$data->id])}}">
                <img src={{asset('storage/'.$data->gambar_produk)}} alt="" srcset="" id="gambar-produk">
              </a>
              <h3 class="text-left mt-3"><b>{{ $data->nama_produk }}</b></h3>
              <h4 class="text-left">Rp. {{ $data->harga }}</h2>
             </div>
            @endforeach
          </div>
        </div>
      </div>
      </form>
      
      @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
      feather.replace();
    </script>
    <script>
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>

  </body>
</html>