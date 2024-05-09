<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Produk | BUMDES Tawar</title>
</head>

<style>

  .navbar.navbar-fixed-top {
    box-shadow: none !important;
  }

  .nav-link,.navbar-brand{
    color: rgb(235, 235, 235);
    font-size: 18px;
    font-family: 'Poppins';
    font-weight: bold;
  }

  .nav-link:hover{
    color: rgb(235, 235, 235);
    border-bottom: 3px solid aliceblue;
    transition: 100ms;
  }

  a{
	  color: black;
	  font-weight: bold;
  }
  
  a:hover{
	  color: rgba(0, 0, 0, 0.87);
	  text-decoration: none;
  }

  .footer1{
	  background-color: #260101;
  }

  .footer1 a{
    text-decoration: none;
    font-weight:500;
    color: aliceblue;
  }
  .footer1 a:hover{
    color: rgba(240, 248, 255, 0.555);
    transition: 300ms;
  }

  .footer1 h5{
    color: aliceblue;
    font-weight:bold;
  }

  .footer2{
    background-color: #260101;
    border-top: 1px solid rgba(255, 255, 255, 0.24);
    padding: 13px; 
    color: aliceblue;    
  }

  .dropdown-toggle::after { 
	  content: none; 
  } 

  .dropdown:hover .dropdown-menu {display: block;}

  .dropdown-menu {
    display: none;
    position: absolute;
    top: 50px;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-menu a {
    font-weight: bold;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .navbar {
	  background-color: #990e0e;
  }

  #gambar-produk{
    width: 400px;
    height: 400px;
    border-radius:10px;
    object-fit: cover;
  }

  #deskripsi {
    font-size: 20px;
    overflow: auto;
  }

  #b-kontak{
    box-shadow: 0px 4px 48.4px -10px #00000038;
  }

  .btn-circle { 
    width: 45px; 
    height: 45px; 
    padding: 6px 0px; 
    border-radius: 25px; 
    background-color: rgba(240, 248, 255, 0);
    border-color: aliceblue;
    border-width: 3px;
  } 
  .btn-circle:hover{ 
    border-color: rgba(240, 248, 255, 0.534);
    transition: 300ms;
  } 

  .breadcrumb-chevron {
    --bs-breadcrumb-divider: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236c757d'%3E%3Cpath fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
    gap: .5rem;
  }
  .breadcrumb-chevron .breadcrumb-item {
    display: flex;
    gap: inherit;
    align-items: center;
    padding-left: 0;
    line-height: 1;
  }
  .breadcrumb-chevron .breadcrumb-item::before {
    gap: inherit;
    float: none;
    width: 1rem;
    height: 1rem;
  }
  .breadcrumb{
    display: flex;
    justify-content: center;
    height: 70px;
    background-color: #dd2c2c25;
    font-size: 15px;
  }
  .breadcrumb a{
    text-decoration: none;
  }

  .no-js #loader { display: none;  }
  .js #loader { display: block; position: absolute; left: 100px; top: 0; }
  .se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../image/loading2.gif') center no-repeat #fff;
  }

</style>

<body style="background-color: #eee5e5; font-family: 'Poppins';">

  <div class="se-pre-con"></div>

    <nav class="navbar navbar-expand-sm">
        <div class="container">
          {{-- <a class="navbar-brand">
            <img src="../image/nada.png" alt="Bootstrap" width="200px" height="70px">
          </a> --}}
          <h1>Logo Bumdes</h1>
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
                  <a class="dropdown-item" href="#">Wisata</a>
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
          <li class="breadcrumb-item" aria-current="page">
            <a class="link-body-emphasis fw-semibold" href="/produk">
              UMKM Produk
            </a>
          </li>
          <li class="breadcrumb-item fw-semibold active" aria-current="page">
              Deskripsi Produk
          </li>
        </ol>
      </nav>
    
      <div class="deskripsi_prod mt-5">
        <div class="container">
            <a href="/produk">
                <button class="btn btn-warning"><b><i data-feather="corner-up-left"></i>&nbsp;&nbsp;Kembali</b></button>   
            </a>
          @foreach ($dataproduk as $data)    
            <div class="row mt-4">
                <div class="col-md-5 text-center">
                    <img src={{asset('storage/'.$data->gambar_produk)}} class="img-responsive" alt="logo" id="gambar-produk">
                </div>
                <div class="col-md-7 text-left">
                    <h2 class="text-left mb-3"><b>{{ $data->nama_produk }}</b></h2>
                    <h3 class="text-left mb-3">Rp. {{ $data->harga }}</h3>              

                    <div class="card mt-4" style="width: auto;border-radius:15px">
                      <div class="card-header fw-bold" style="font-size:23px;border-top-left-radius:15px;border-top-right-radius:15px">
                        Detail Produk
                      </div>
                      <div class="card-body" id="deskripsi" style="height: 200px">
                        {!! $data->deskripsi_produk !!}
                      </div>
                    </div>
                  
                    <a href="//api.whatsapp.com/send?phone={{ $data->kontak_penjual }}&text=Halo saya ingin memesan produk {{ $data->nama_produk }}" target="_blank">                 
                      <button class="btn btn-success mt-3" id="b-kontak"><b>Hubungi Penjual&nbsp;&nbsp;<i class="bi bi-whatsapp"></i></b></button>
                    </a>
                  </div>
            </div>
          @endforeach
        </div>
      </div>

      @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
   
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