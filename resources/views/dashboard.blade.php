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
	<link rel="stylesheet" href="css/template_dashboard.css">

    <title>Dashboard | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5; font-family: 'Poppins';">
    
	@include('partial.navbarAdmin')

	<div class="navbar-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<i class="bi bi-house fs-3"></i>
						<h6>Dashboard</h6>
					</div>

					<div class = "item-nav">
						<a href="/datauser">
							<div class="nav-option option2">
								<i style="color: #A01515;" class="bi bi-person-rolodex fs-3"></i>
								<h6>Data User</h6>
							</div>
						</a>
					</div>

					<div class = "item-nav">
						<a href="/dataumkm">
							<div class="nav-option option3">
								<i style="color: #A01515;" class="bi bi-file-earmark-check fs-3"></i>
								<h6>Data UMKM</h6>
							</div>
						</a>
					</div>

					<div class = "item-nav">
						<a href="/datakegiatan">
							<div class="nav-option option4">
								<i style="color: #A01515;" class="bi bi-clipboard-check fs-3"></i>
								<h6>Data Kegiatan</h6>
							</div>
						</a>
					</div>

					<div class = "item-nav">
						<form action="/logout" method="get" class="d-flex">
							@csrf
							<div class="nav-option logout">
								<i style="color: #A01515;" class="bi bi-box-arrow-left fs-3"></i>
								<button style="background-color: #0c007d00;" class="nav-link px-3 border-0" id="logout" type="submit"><h6 style="color: rgb(43, 43, 43)">Logout</h6></button>
							</div>
						</form>
					</div>


				</div>
			</nav>
		</div>

		<div class="main">
			<h2 style="font-weight: 700">Selamat datang, {{ auth()->user()->namalengkap }}</h2>		
				
			<div class="stat mt-5">
				
				<div class="label-stat" style="color: #eee5e5">
					<i class="bi bi-clipboard-data-fill fs-3 mx-2"></i>
					<b class="l-stat1 mx-2">Statistik UMKM Desa Tawar</b>
					<b class="l-stat2">Statistik</b>
				</div>
					
				<div class="content-stat mt-5">
					<div class="container-fluid">
						<div class="row mx-1" style="margin-left: 10px;">
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-5 text-center">
										<img src="../Image/Product.png" alt="" srcset="">
									</div>
									<div class="col-sm-3 text-left">
										<h1 id="counter" data-count="{{ $jumlahproduk }}">0</h1>
										<p><b>Produk</b></p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-5 text-center">
										<img src="../Image/Service.png" alt="" srcset="">
									</div>
									<div class="col-sm-3 text-left">
										<h1 id="counter2" data-count2="{{ $jumlahjasa }}">0</h1>
										<p><b>Jasa</b></p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-5 text-center">
										<img src="../Image/Beach.png" alt="" srcset="">
									</div>
									<div class="col-sm-3 text-left">
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
					<i class="bi bi-list-check fs-3 mx-2"></i>
					<b class="l-kegiatan1 mx-2">Kegiatan Terbaru</b>
					<b class="l-kegiatan2">Kegiatan</b>
				</div>
				<div class="content-kegiatan mt-5">
					<div class="container">
						<div class="body-kegiatan1 row">		
							@foreach ($datakegiatan as $data)		
								<div class="body-kegiatan2 col-lg-4">
									<img src="{{asset('storage/'.$data->galeri_kegiatan)}}" class="img-responsive" id="gambar-kegiatan">
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
	<script>
		
	</script>

  </body>
</html>