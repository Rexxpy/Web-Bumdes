<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Wisata | BUMDES Tawar</title>
</head>

<style>

  .deskripsi img{
      width: 50%;
      border-radius:10px;
      object-fit:cover;
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
          <li class="breadcrumb-item" aria-current="page">
            <a class="link-body-emphasis fw-semibold" href="/wisata">
              UMKM Wisata
            </a>
          </li>
          <li class="breadcrumb-item fw-semibold active" aria-current="page">
              Deskripsi Wisata
          </li>
        </ol>
      </nav>
    
      @foreach ($datawisata as $data)   

        <div class="deskripsi_prod mt-5">
          <div class="container">
              <a href="/wisata">
                  <button class="btn btn-warning"><b><i data-feather="corner-up-left"></i>&nbsp;&nbsp;Kembali</b></button>   
              </a>
              <div class="head text-center mt-4"> 
                  <h2><b>{{ $data->nama_wisata }}</b></h2>
                  <img src={{asset('storage/'.$data->galeri_wisata)}} class="img-responsive" alt="logo">
              </div>
              <div class="body1 mt-3">
                <h3>{{ $data->deskripsi_wisata }}</h3>
              </div>

              <div class="body2 mt-5">
                <h3><b>Tarif Masuk :</b></h3>
                <h4>Rp. {{ $data->tarif }}</h4>
              </div>
              
              <div class="end mt-5">
                <h3><b>Titik Lokasi Wisata :</b></h3>
                <a href="{{ $data->titik_lokasi }}"><h4>{{ $data->titik_lokasi }}</h4></a>
              </div>            
    
          </div>
        </div>
      @endforeach

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