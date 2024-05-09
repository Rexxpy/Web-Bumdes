<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon"> 
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/home.css">
    
    <title>Home | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">

  <div class="se-pre-con"></div>

  <header>
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container">
          <div class="navbar-brand">
            <img src="../image/logo mojo.png" alt="logo" width="20%">
            BUMDES TAWAR
          </div>
          {{-- <h3>Logo Bumdes</h3> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/tentang">Tentang Bumdes</a>
                  <a class="dropdown-item" href="/sto">Struktur Organisasi</a>
                </div>
              </li>
              <li class="nav-item ms-4 dropdown">
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
              <li class="nav-item ms-4">
                <a class="nav-link" aria-current="page" href="/loginview"><i data-feather="log-in"></i></a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
  </header>
    

      <main>

        <section class="carousel">
          <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../image/desa.jpg" alt="" style="opacity: 0.4">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="mt-5"><b>SELAMAT DATANG DI</b></h1>
                    <h1 class="mt-1"><b>WEBSITE BUMDES DESA TAWAR</b></h1>
                    <h5 class="mt-2"><b>Kecamatan Gondang, Kabupaten Mojokerto</b></h5>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../image/logo mojo.png" alt="" style="opacity: 0.4">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Tentang BUMDES</h1>
                    <h5 class="mb-3">Kenali sejarah dan visi misi BUMDES Desa Tawar</h5>
                    <p><a class="btn b-tentang" href="/tentang">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item text-center">
                @foreach ($dataumkm as $data)                
                  <img class="d-block w-100" src={{asset('storage/'.$data->gambar_produk)}} alt="" style="opacity: 0.4;">
                @endforeach
                <div class="container">
                  <div class="carousel-caption">
                    <h1>UMKM Desa Tawar</h1>
                    <h5 class="mb-3">Inspirasi Lokal, Gaya Global: Temukan Produk Terbaru Kami</h5>
                    <p><a class="btn b-tentang" href="/produk">Learn more</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

  
        <section class="tentang">
          <div class="tentang">
            <div class="container">
              <div class="row">
                  <div class="col-md-5 text-center tentang1">
                      <img src="../image/logo mojo.png" class="img-responsive" alt="logo" style="width: 100%">
                  </div>
                  <div class="col-md-6 text-left tentang2">
                      <h2 class="text-center mb-3"><b>Tentang BUMDES Desa Tawar</b></h2>
                      <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, doloribus ullam delectus magnam dolorum. Illo, maiores! Dolorem magni, esse, similique alias quas consequuntur ea nam vel obcaecati vitae deserunt.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi delectus ex rerum, aperiam aspernatur nulla beatae commodi soluta iusto quos fuga voluptates aut, sed, architecto quam fugiat. Doloremque, ex pariatur</p>
                      <a href="/tentang">
                        <button class="btn b-tentang">Baca Selengkapnya</button>
                      </a>
                  </div>
              </div>
            </div>
          </div>
        </section>
  
        <section class="kegiatan">
          <div class="kegiatan">
            <div class="container">
              <div class="head-kegiatan text-center mb-4">
                  <h2 class="text-center"><b>Berbagai Kegiatan Kami</b></h2>
                  <p style="font-weight:600;font-size: 20px">Jangan Lewatkan Kegiatan dan Acara Terbaru Kami</p>
              </div>
              <div class="row kegiatann">
                  @foreach ($datakegiatan as $data)	
                    <div class="body-kegiatan col-md-4 text-left">
                      <a href="{{route('deskripsi_kegiatan', [$data->id])}}">
                        <img src={{asset('storage/'.$data->galeri_kegiatan)}} class="img-responsive" alt="logo" id="gambar-kegiatan">
                      </a>
                      <h6 class="mt-3"><b>{{ $data->nama_kegiatan }}</b></h6>
                      <p><i class="bi bi-calendar mx-2" style="color: #990e0e"></i>{{ $data->tanggal }}</p>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <section class="stats">
          <div class="stats text-center text-md-left mt-5 mb-5" style="font-size:20px;font-weight: bold;color: aliceblue">
            <div class="container">
              <div class="row">
                  <div class="text-center mt-5 mb-5">
                      <h1 class="text-center"><b>Statistik BUMDES Desa Tawar</b></h1>
                      <p class="big">Info Statistik Keseluruhan Dari BUMDES Desa Tawar</p>
                  </div>
                  <div class="col-md-4" id="kolom">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <img src="../Image/Home.png" alt="" srcset="">
                      </div>
                      <div class="col-md-3 text-left">
                        <h1 id="counter" data-count="1">0</h1>
                        <p><b>Kantor</b></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" id="kolom">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <img src="../Image/Handshake.png" alt="" srcset="">
                      </div>
                      <div class="col-md-3 text-left">
                        <h1 id="counter2" data-count2="20">0</h1>
                        <p><b>Mitra</b></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4" id="kolom">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <img src="../Image/Shop.png" alt="" srcset="">
                      </div>
                      <div class="col-md-3 text-left">
                        <h1 id="counter3" data-count3="15">0</h1>
                        <p><b>UMKM</b></p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
        
      </main>


      @include('partial.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
    <script>
      feather.replace();
    </script>

    <script>
      
      function startCounter() {
          let counterElement = document.getElementById('counter');
          let counte = parseInt(counterElement.getAttribute('data-count'));
          let count = 0;

          // Set interval untuk mengupdate nilai counter setiap detik
          let counterInterval = setInterval(function () {
            counterElement.textContent = count;

            if (count === counte) {
              clearInterval(counterInterval);
            } else {
              count++;
            }
          }, 100); 
        }
        function startCounter2() {
          let counterElement = document.getElementById('counter2');
          let counte = parseInt(counterElement.getAttribute('data-count2'));
          let count = 0;

          // Set interval untuk mengupdate nilai counter setiap detik
          let counterInterval = setInterval(function () {
            counterElement.textContent = count;

            if (count === counte) {
              clearInterval(counterInterval);
            } else {
              count++;
            }
          }, 100); 
        }
        function startCounter3() {
          let counterElement = document.getElementById('counter3');
          let counte = parseInt(counterElement.getAttribute('data-count3'));
          let count = 0;

          // Set interval untuk mengupdate nilai counter setiap detik
          let counterInterval = setInterval(function () {
            counterElement.textContent = count;

            if (count === counte) {
              clearInterval(counterInterval);
            } else {
              count++;
            }
          }, 100); 
        }

        // window.addEventListener('scroll', ()=>{
        //   if (window.scrollY >= 700) {
        //       startCounter();
        //       startCounter2();
        //       startCounter3();
        //     } 
        // });

          startCounter();
          startCounter2();
          startCounter3();

    </script>
    
    <script>
       const navB = document.querySelector('.navbar');

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 56) {
            navB.classList.add('navbar-scrolled');
          } else if (window.scrollY < 56) {
            navB.classList.remove('navbar-scrolled');
          }
       });
    </script>

    <script>
       const elemen1 = document.querySelector('.tentang1');
       const elemen2 = document.querySelector('.tentang2');
       const elemen3 = document.querySelector('.head-kegiatan');
       const elemen4 = document.querySelector('.kegiatann');

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 80) {
            elemen1.classList.add('tentang1-animate');
            elemen2.classList.add('tentang2-animate');
          } 
       });

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 460) {
            elemen3.classList.add('head-kegiatan-animate');
          }
       });

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 600) {
            elemen4.classList.add('body-kegiatan-animate');
          }
       });
       
    </script>
    
    <script>
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
  </body>
</html>