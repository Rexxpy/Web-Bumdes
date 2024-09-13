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

    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../image/logo mojo.png" alt="logo" width="15%">
            BUMDES TAWAR
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-expanded="true" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            
            <div class="offcanvas-header">
                <h1 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mx-lg-2" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tentang">Tentang Bumdes</a>
                    <a class="dropdown-item" href="/sto">Struktur Organisasi</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mx-lg-2" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          UMKM
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/produk">Produk</a>
                    <a class="dropdown-item" href="/jasa">Jasa</a>
                    <a class="dropdown-item" href="/wisata">Wisata</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="/kegiatan">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="/kontak">Kontak</a>
                </li>     
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="/loginview"><i data-feather="log-in"></i></a>
                </li>        
              </ul>
            </div>
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
                <img class="w-100" src="../image/desa.jpg" alt="" style="opacity: 0.4">
               
                  <div class="carousel-caption">
                    <h1 class="mt-5"><b>SELAMAT DATANG DI</b></h1>
                    <h1 class="mt-1"><b>WEBSITE BUMDES DESA TAWAR</b></h1>
                    <h5 class="mt-2"><b>Kecamatan Gondang, Kabupaten Mojokerto</b></h5>
                  </div>
                
              </div>
              <div class="carousel-item">
                <img class="w-100" src="../image/logo mojo.png" alt="" style="opacity: 0.4">
               
                  <div class="carousel-caption">
                    <h1>Tentang BUMDES</h1>
                    <h5 class="mb-3">Kenali sejarah dan visi misi BUMDES Desa Tawar</h5>
                    <p><a class="btn b-tentang" href="/tentang">Learn more</a></p>
                  </div>
                
              </div>
              <div class="carousel-item text-center">
                @foreach ($dataumkm as $data)                
                  <img class="w-100" src="{{asset('storage/'.$data->gambar_produk)}}" alt="" style="opacity: 0.4;">
                @endforeach
                
                  <div class="carousel-caption">
                    <h1>UMKM Desa Tawar</h1>
                    <h5 class="mb-3">Inspirasi Lokal, Gaya Global: Temukan Produk Terbaru Kami</h5>
                    <p><a class="btn b-tentang" href="/produk">Learn more</a></p>
                  </div>
                
              </div>
            </div>
          </div>
        </section>

        <section class="tentang">
          <div class="tentang">
            <div class="container-fluid">
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

        <section class="kegiatan" id="kegiatan"> 
          <section class="head-kegiatan">
              <h1><b>Berbagai Kegiatan Kami</b></h1>
              <p>Jangan Lewatkan Kegiatan dan Acara Terbaru Kami</p>
          </section>
          <section class="content-kegiatan">     
              @foreach ($datakegiatan as $data)	      
              
                <div class="body-kegiatan">
                      <a href="{{route('deskripsi_kegiatan', [$data->id])}}">
                        <img src="{{asset('storage/'.$data->galeri_kegiatan)}}" class="img-responsive" alt="logo" id="gambar-kegiatan">
                      </a>
                      <h5><b>{{ $data->nama_kegiatan }}</b></h5>
                      <p><i class="bi bi-calendar mx-2" style="color: #990e0e"></i>{{ $data->tanggal }}</p>
                </div>
              @endforeach
          </section>   
        </section>     
      
        <section class="stats">
        
          <section class="head-stats">
                  <h1><b>Statistik BUMDES Tawar</b></h1>
                  <p>Info Statistik Keseluruhan Dari BUMDES Tawar. Info Lengkapnya Silahkan Berkunjung Ke Alamat Kami</p>
          </section>

          <section class="content-stats mb-4">
              <div class="body-stats">
                <table>
                  <tr>
                    <th rowspan="2"><img src="image/Home.png" alt="" srcset=""></th>
                    <td><h5 id="counter" data-count="1"><b>0</b></h5></td>
                  </tr>
                  <tr>
                    <td><p><b>Kantor</b></p></td>
                  </tr>
                </table>
              </div>
              <div class="body-stats">
                <table>
                  <tr>
                    <th rowspan="2"><img src="image/Handshake.png" alt="" srcset=""></th>
                    <td><h5 id="counter2" data-count2="20"><b>0</b></h5></td>
                  </tr>
                  <tr>
                    <td><p><b>Mitra</b></p></td>
                  </tr>
                </table>
              </div>
              <div class="body-stats">
                <table>
                  <tr>
                    <th rowspan="2"><img src="image/Shop.png" alt="" srcset=""></th>
                    <td><h5 id="counter3" data-count3="15"><b>0</b></h5></td>
                  </tr>
                  <tr>
                    <td><p><b>UMKM</b></p></td>
                  </tr>
                </table>
              </div>
          </section>

        </section>

        <section class="produk" id="produk"> 
          <section class="head-produk">
              <h1><b>Produk UMKM Tawar</b></h1>
              <p>Produk Terbaru UMKM Tawar</p>
          </section>
          <section class="content-produk">     
              @foreach ($dataproduk as $data)	      
              
                <div class="body-produk">
                  <a href="{{route('deskripsi_produk', [$data->id])}}">
                      <img src="{{asset('storage/'.$data->gambar_produk)}}" class="img-responsive" alt="gambar-produk" id="gambar-produk">
                  </a>
                  <div class="produk-container">
                    <h5>{{$data->nama_produk}}</h5>
                    <p><b>Rp. {{$data->harga}}</b></p>
                  </div>
                </div>

              @endforeach
          </section>   
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
       const elemen4 = document.querySelector('.content-kegiatan');
       const elemen5 = document.querySelector('.head-produk');
       const elemen6 = document.querySelector('.content-produk');

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

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 1500) {
            elemen5.classList.add('head-produk-animate');
          }
       });

       window.addEventListener('scroll', ()=>{
          if (window.scrollY >= 1700) {
            elemen6.classList.add('body-produk-animate');
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