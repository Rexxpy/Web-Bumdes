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
    <link rel="stylesheet" href="/css/deskripsi_produk.css">

    <title>Produk | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">

  <div class="se-pre-con"></div>

  @include('partial.navbar')

  <main>

    <section class="deskripsi_prod mt-5">
      <div class="container">
          <a href="/produk">
              <button class="btn btn-warning"><b><i data-feather="corner-up-left"></i>&nbsp;&nbsp;Kembali</b></button>   
          </a>
        @foreach ($dataproduk as $data)    
          <div class="row mt-4">
              <div class="gambar-deskripsi col-lg-5 text-center">
                  <img src="{{asset('storage/'.$data->gambar_produk)}}" class="img-responsive" alt="logo" id="gambar-produk">
              </div>
              <div class="content-deskripsi col-lg-7 text-left">
                  <h3 class="text-left mb-3"><b>{{ $data->nama_produk }}</b></h3>
                  <h2 class="text-left mb-3">Rp. {{ $data->harga }}</h2>              
  
                  <div class="card mt-4" style="border-radius:15px">
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
      $(window).load(function() {
              // Animate loader off screen
              $(".se-pre-con").fadeOut("slow");;
      });
    </script>
  </body>
</html>