<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="jquery-3.6.3.min.js"></script>
      <script src="https://unpkg.com/feather-icons"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
      <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
      <link rel="stylesheet" href="css/login.css">
      <title>Login | BUMDES Tawar</title>
      <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon"> 

   </head>

   <body style="font-family: 'Poppins';">

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
                  <a class="dropdown-item" href="#">Jasa</a>
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
     
      @if(session()->has('loginError'))
        <div id="fail-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
      @endif


      <div class="wrapper mt-3">
         <div class="title-text">
            <div class="title login">
               Login
            </div>
            <div class="title signup">
               Registrasi
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Registrasi</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="/login" method="POST" class="login">
                {{csrf_field()}}

                  <div class="form-floating mb-3">
                    <input type="text" name="namapendek"  class="form-control" id="floatingInput" placeholder="Masukan Nama Pendek" required>
                    <label for="floatingInput">Nama Pendek</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" name="password" id="passwordlog" class="form-control" id="floatingInput" placeholder="Masukkan password" required>
                    <label for="floatingInput">Password</label> <i id='eyelog' class="bi bi-eye-fill"></i>
                </div>
                  
                <div class="" id="lup">
                   Lupa Password ? <a href="/gantipasswdview"><b>Klik Disini</b></a>
                </div>
                
                <div class="" id="hubadmin">
                   <b>Jika lupa nama pendek hubungi admin !</b></a>
                </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Belum Punya Akun? <a href=""><b>Daftar sekarang</b></a>
                  </div>
               </form>
               <form action="/register" method="post" class="signup">
                {{csrf_field()}}

                  <div class="form-floating mb-3">
                     <input type="text" name="namalengkap" class="form-control" id="floatingInput"  placeholder="Masukan Nama Lengkap"  required>
                     <label for="floatingInput">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" name="namapendek"  class="form-control" id="floatingInput" placeholder="Masukan Nama Pendek" required>
                      <label for="floatingInput">Nama Pendek</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" name="password" id="passwordsign" class="form-control" id="floatingInput" placeholder="Masukkan password" required>
                      <label for="floatingInput">Password</label><i id='eyesign' class="bi bi-eye-fill"></i>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Daftar">
                  </div>
               </form>
            </div>
         </div>
        </div>
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
        const passwordInputLog = document.querySelector("#passwordlog")
        const passwordInputSign = document.querySelector("#passwordsign")
        const eyelog = document.querySelector("#eyelog")
        const eyesign = document.querySelector("#eyesign")

        eyelog.addEventListener("click", function(){
          this.classList.toggle("bi-eye-slash-fill")
          const type = passwordInputLog.getAttribute("type") === "password" ? "text" : "password"
          passwordInputLog.setAttribute("type", type)
        })
        
        eyesign.addEventListener("click", function(){
          this.classList.toggle("bi-eye-slash-fill")
          const type = passwordInputSign.getAttribute("type") === "password" ? "text" : "password"
          passwordInputSign.setAttribute("type", type)
        })

        $("#fail-alert").fadeTo(2000, 450).fadeOut(450, function(){
          $("#fail-alert").fadeOut(450);
        });
        
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
       <script>
        feather.replace()
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   </body>
</html>