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
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/jasa.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Jasa | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">

  <div class="se-pre-con"></div>
  
  @include('partial.navbar')

  <main>

      @foreach ($datajasa as $data)    
        <section class="jasa mt-5">
          <div class="container">
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="{{asset('storage/'.$data->gambar_jasa)}}" class="img-responsive" alt="logo" id="gambar-jasa">
                </div>
                <div class="col-md-7 text-left">
                  <h2 class="text-left mb-3"><b>{{ $data->nama_jasa }}</b></h2>
                  <h4 class="text-left mt-1">{!! $data->deskripsi_jasa !!}</h4>
                  <a href="//api.whatsapp.com/send?phone={{ $data->kontak_penyedia_jasa }}&text=Halo saya membutuhkan jasa {{ $data->nama_jasa }}" target="_blank">  
                    <button class="btn btn-success mt-2"><b>Hubungi Penyedia Jasa&nbsp;&nbsp;<i class="bi bi-whatsapp"></i></b></button>
                  </a>
              </div>
            </div>
          </div>
        </section>
      @endforeach

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