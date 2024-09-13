<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/wisata.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Wisata| BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5">

  <div class="se-pre-con"></div>

  @include('partial.navbar')
    
  <main>

    <section class="wisata">
      <div class="wisata mt-5">
        <div class="container">
          <div class="row" style="display:flex;justify-content: center;align-items: center;">  
            @foreach ($datawisata as $data)    
              <div class="col-sm-auto image-1">
                <a href="{{route('deskripsi_wisata', [$data->id])}}">
                  {{-- <img src="../image/desa.jpg" class="img-responsive" alt="logo" style="width: 60%;border-radius:10px;object-fit:cover;"> --}}
                  <h1 style="color: aliceblue">{{ $data->nama_wisata }}</h1>
                </a>     
              </div>
            @endforeach  
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
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
  </body>
</html>