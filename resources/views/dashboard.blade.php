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
	<link rel="stylesheet" href="css/dashboard.css">

    <title>Dashboard | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">
    
      <!-- for header part -->
	<header>
		<div class="logosec">
			<div class="logo">
				<img src="../image/logo mojo.png" alt="logo" width="7%">
				BUMDES TAWAR
			</div>
		</div>
	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<i class="bi bi-house fs-3"></i>
						<h6>Dashboard</h6>
					</div>

					<div class="nav-option option2">
						<i style="color: #A01515;" class="bi bi-person-rolodex fs-3"></i>
						<a href="/datauser">
							<h6>Data User</h6>
						</a>
					</div>

					<div class="nav-option option3">
						<i style="color: #A01515;" class="bi bi-file-earmark-check fs-3"></i>
						<a href="/dataumkm">
							<h6>Data UMKM</h6>
						</a>
					</div>

					<div class="nav-option option4">
						<i style="color: #A01515;" class="bi bi-clipboard-check fs-3"></i>
						<a href="/datakegiatan">
							<h6>Data Kegiatan</h6>
						</a>
					</div>

					<div class="nav-option logout">
							<i style="color: #A01515;" class="bi bi-box-arrow-left fs-3"></i>
							<form action="/logout" method="get" class="d-flex">
								@csrf
								<button style="background-color: #0c007d00;" class="nav-link px-3 border-0" id="logout" type="submit"><h6 style="color: rgb(43, 43, 43)">Logout</h6></button>
							</form>
					</div>

				</div>
			</nav>
		</div>

		<div class="main">
			<h2 style="font-weight: 700">Selamat datang, {{ auth()->user()->namalengkap }}</h2>		
				
			<div class="stat mt-5">
				<div class="label-stat" style="color: #eee5e5">
					<i class="bi bi-clipboard-data-fill fs-2 mx-2"></i>
					<b class="mx-2" style="font-size: 23px">Statistik UMKM Desa Tawar</b>
				</div>
				
					
				<div class="value-stat">
					<div class="container">
						<div class="row mx-1" style="margin-left: 10px;">
							<div class="col-md-4 ">
								<div class="row">
									<div class="col-md-4 text-center">
										<img src="../Image/Product.png" alt="" srcset="">
									</div>
									<div class="col-md-3 text-left">
										<h1 id="counter" data-count="{{ $jumlahproduk }}">0</h1>
										<p><b>Produk</b></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="row">
									<div class="col-md-4 text-center">
										<img src="../Image/Service.png" alt="" srcset="">
									</div>
									<div class="col-md-3 text-left">
										<h1 id="counter2" data-count2="{{ $jumlahjasa }}">0</h1>
										<p><b>Jasa</b></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="row">
									<div class="col-md-5 text-center">
										<img src="../Image/Beach.png" alt="" srcset="">
									</div>
									<div class="col-md-3 text-left">
										<h1 id="counter3" data-count3="{{ $jumlahwisata }}">0</h1>
										<p><b>Wisata</b></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="kegiatan mt-5">
				<div class="label-kegiatan" style="color: #eee5e5">
					<i class="bi bi-list-check fs-1 mx-2"></i>
					<b class="mx-2" style="font-size: 23px">Kegiatan Terbaru</b>
				</div>
				<div class="konten-kegiatan">
					<div class="container">
						<div class="row" style="margin-left: 20px;">		
							@foreach ($datakegiatan as $data)		
								<div class="col-md-4 text-left">
									<img src={{asset('storage/'.$data->galeri_kegiatan)}} class="img-responsive" id="gambar-kegiatan">
									<h6><b>{{ $data->nama_kegiatan }}</b></h6>
									<p>{{ $data->tanggal }}</p>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	
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
  </body>
</html>