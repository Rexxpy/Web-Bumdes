<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    
    <script src="https://unpkg.com/feather-icons"></script>
    
    <link rel="stylesheet" href="/css/template.css">

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

  @include('partial.navbar')

  @foreach ($datawisata as $data)   

    <div class="deskripsi_prod mt-5">
      <div class="container">
          <a href="/wisata">
              <button class="btn btn-warning"><b><i data-feather="corner-up-left"></i>&nbsp;&nbsp;Kembali</b></button>   
          </a>
          <div class="head text-center mt-4"> 
              <h2><b>{{ $data->nama_wisata }}</b></h2>
              <img src="{{asset('storage/'.$data->galeri_wisata)}}" class="img-responsive" alt="logo">
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