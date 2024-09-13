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

    @include('partial.navbar')
  
    <main>

      <form action="/filter_produk" method="post">
        @csrf

        <section class="filter-produk">

          <section class="content-filter mt-5">
            
                  <div class="body-filter btn"> 
                      <button class="btn" value="makanan" id="b-produk" name="b-produk"></button>
                      <img src="../image/makanan.png" alt="" srcset="" style="width: 20%;">
                      <h2 class="text-center mx-2"><b>Makanan</b></h2>
                  </div>
                  <div class="body-filter btn">
                      <button class="btn" value="minuman" id="b-produk" name="b-produk"></button>
                      <img src="../image/minuman.png" alt="" srcset="" style="width: 20%">
                      <h2 class="text-center"><b>Minuman</b></h2>
                  </div>
                  <div class="body-filter btn">
                      <button class="btn" value="kreasi" id="b-produk" name="b-produk"></button>
                      <img src="../image/kreasi.png" alt="" srcset="" style="width: 20%">
                      <h2 class="text-center"><b>Kreasi Desa</b></h2>
                  </div>
                  
          </section>
          
        </section>

        <section class="produk mt-5">

            <section class="content-produk">
              @foreach ($datas as $data)    

                <div class="body-produk mx-3">

                    <a href="{{route('deskripsi_produk', [$data->id])}}">
                      <img src="{{asset('storage/'.$data->gambar_produk)}}" alt="" srcset="" id="gambar-produk">
                    </a>
                    <h3 class="text-left mt-3"><b>{{ $data->nama_produk }}</b></h3>
                    <h4 class="text-left">Rp. {{ $data->harga }}</h2>
                    
                </div>

              @endforeach
            </section>
          
        </section>
      </form>
        
    </main>

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