<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Page</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <script src="jquery-3.6.3.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    html,body{
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background:#D3D3D3;
    }
    ::selection{
    background: #3e7136;
    color: #fff;
    }
    .wrapper{
    overflow: hidden;
    max-width: 390px;
    background: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
    }
    .wrapper .title-text{
    display: flex;
    width: 200%;
    }
    .wrapper .title{
    width: 50%;
    font-size: 30px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    .wrapper .slide-controls{
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgrey;
    border-radius: 5px;
    }
    .slide-controls .slide{
    height: 100%;
    width: 100%;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.6s ease;
    }
    .slide-controls label.signup{
    color: #000;
    }
    .slide-controls .slider-tab{
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    background: -webkit-linear-gradient(left, #06549c, #3e7136);
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    input[type="radio"]{
    display: none;
    }
    #signup:checked ~ .slider-tab{
    left: 50%;
    }
    #signup:checked ~ label.signup{
    color: #fff;
    cursor: default;
    user-select: none;
    }
    #signup:checked ~ label.login{
    color: #000;
    }
    #login:checked ~ label.signup{
    color: #000;
    }
    #login:checked ~ label.login{
    cursor: default;
    user-select: none;
    }
    .wrapper .form-container{
    width: 100%;
    overflow: hidden;
    }
    .form-container .form-inner{
    display: flex;
    width: 200%;
    }
    .form-container .form-inner form{
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    .form-inner form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
    }
    .form-inner form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-bottom-width: 2px;
    font-size: 17px;
    transition: all 0.3s ease;
    }
    .form-inner form .field input:focus{
    border-color: #3e7136;
    /* box-shadow: inset 0 0 3px #fb6aae; */
    }
    .form-inner form .field input::placeholder{
    color: #999;
    transition: all 0.3s ease;
    }
    form .field input:focus::placeholder{
    color: #b3b3b3;
    }
    .form-inner form .pass-link{
    margin-top: 5px;
    }
    .form-inner form .signup-link{
    text-align: center;
    margin-top: 30px;
    }
    .form-inner form .pass-link a,
    .form-inner form .signup-link a{
    color: #94c02f;
    text-decoration: none;
    }
    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover{
    text-decoration: underline;
    }
    form .btn{
    height: 50px;
    width: 100%;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
    }
    form .btn .btn-layer{
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    background: #990e0e;
    border-radius: 5px;
    transition: all 0.4s ease;;
    }
    form .btn:hover .btn-layer{
    left: 0;
    }
    form .btn input[type="submit"]{
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    background: none;
    border: none;
    color: #fff;
    padding-left: 0;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
    }
    .iconback{
    margin-bottom: 10px;
    }
    l{
        font-size: 20px;
        /* position: absolute; */
        /* top: 11px;
        left: 45px; */
        font-weight: bold;
        color: #550000;
    }
    a{

    text-decoration: none;
    }

   </style>
   <body>

      @if(session()->has('loginError'))
        <div id="fail-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
      @endif

      <div class="wrapper">

        <div class="iconback">
          <a href="/loginview">
            <i style="color: #550000;vertical-align: middle;" class="bi bi-arrow-left-circle-fill fs-4"></i>
            <l>Kembali</l>
          </a>
        </div>

        <br>

         <div class="title-text"> 
            <div class="title signup">
               Form Ganti Password
            </div>
         </div>
         <div class="form-container">
            
            <div class="form-inner">
               <form action="/gantipasswd" method="post" class="signup">
                {{csrf_field()}}

                  <br>
                  <div class="form-floating mb-3">
                     <input type="text" name="namapendek" class="form-control" id="floatingInput"  placeholder="Masukan nama pendek"  required>
                     <label for="floatingInput">Masukkan Nama Pendek</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" name="passwordbaru"  class="form-control" id="floatingInput" placeholder="Masukkan password baru" required>
                      <label for="floatingInput">Password Baru</label>
                    </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Ganti">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
        $("#fail-alert").fadeTo(2000, 450).fadeOut(450, function(){
          $("#fail-alert").fadeOut(450);
        });
        
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
   </body>
</html>