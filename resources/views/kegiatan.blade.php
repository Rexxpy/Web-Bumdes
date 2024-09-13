<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/kegiatan.css">
  
    <title>Kegiatan | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">

  <div class="se-pre-con"></div>

  @include('partial.navbar')

  <main>

    <section class="kegiatan mt-5">
      <div class="container">
        <div class="body-kegiatan row mt-4">
          @foreach ($datakegiatan as $data)
            <div class="content-kegiatan col-12 col-md-6 col-lg-4">
              <a href="{{route('deskripsi_kegiatan', [$data->id])}}">
                <img src="{{asset('storage/'.$data->galeri_kegiatan)}}" class="img-responsive" alt="logo" id="gambar-kegiatan">
              </a>
              <h6 class="mt-3 text-left"><b>{{ $data->nama_kegiatan }}</b></h6>
              <p class="text-left"><i class="bi bi-calendar mx-2" style="color: #990e0e"></i>{{ $data->tanggal }}</p>
            </div>
          @endforeach
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
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>
</body>
</html>