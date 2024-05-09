<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/tentang.css">

    <title>Tentang | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5">

  <div class="se-pre-con"></div>

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
          <li class="breadcrumb-item fw-semibold active" aria-current="page">
             Tentang BUMDES Tawar
          </li>
        </ol>
    </nav>
      
      <div class="sejarah">
        <div class="container">
          <div class="row">
            <div class="col-md-5 text-center sejarah1">
              <img src="../image/logo mojo.png" class="img-responsive" alt="logo" style="width: 100%">
            </div>
              <div class="col-md-7 text-left sejarah2">
                <h3 class="mt-4 mb-3" style="font-size: 40px"><b>Sejarah BUMDES Desa Tawar</b></h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Illo, maiores! Dolorem magni, esse, similique alias quas consequuntur ea nam vel obcaecati vitae deserunt.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi delectus ex rerum, aperiam aspernatur nulla beatae commodi soluta iusto quos fuga voluptates aut, sed, architecto quam fugiat. Doloremque, ex pariatur</p>
              </div>
            </div>
          </div>
      </div>

      <div class="visi">
        <div class="container">
          <div class="row" style="display: flex;justify-content:center;">
            <h2 class="text-center"><b>Visi Misi BUMDES TAWAR</b></h2>
            <div class="col mt-4">
              <div class="container">
                <div class="row" style="display: flex;justify-content:center;color:rgb(61, 61, 61);"> 
                  <div class="col-md-5" style="margin-right: 100px">
                    <h3>Visi</h3>
                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum</p>
                  </div>
                  <div class="col-md-5">
                    <h3>Misi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Temporibus ipsa, doloribus ullam delectus magnam dolorum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
    <script>
      feather.replace();
    </script>

    {{-- l --}}

    <script>
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
  </body>
</html>