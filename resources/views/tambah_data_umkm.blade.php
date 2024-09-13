<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <title>Data Produk | BUMDES Tawar</title>

	<link rel="stylesheet" href="/css/dashboard_umkm.css">
</head>

<body style="background-color: #eee5e5">
    
    <!-- for header part -->
	<header>
        <div class="logosec">
            <div class="logo">Logo BUMDES TAWAR</div>
		</div>
	</header>
    
	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<i style="color: #A01515;" class="bi bi-house fs-3"></i>
						<a href="/dashboard">
							<h6>Dashboard</h6>
						</a>
					</div>

					<div class="nav-option option2">
						<i  style="color: #A01515;" class="bi bi-person-rolodex fs-3"></i>
						<a href="/datauser">
							<h6>Data User</h6>
						</a>
					</div>

					<div class="nav-option option3">
						<i class="bi bi-file-earmark-check fs-3"></i>
						<a href="/dataumkm">
							<h6 style="color: white">Data UMKM</h6>
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
            <div class="header">
                <h2 style="font-weight: 600">Input Data UMKM</h2>	
                <hr>
            </div>
            
            
            <form id="form" action="/dataumkm" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="drowdown mt-4">
                
                <div class="row">
                    <div class="col-md-3">
                        <select style="width: 250px" id="jenisumkm" name="jenisumkm" class="btn" onchange="jenisUmkm()">
                            <option value="default">Pilih Jenis UMKM</option>
                                    <option value="Produk">Produk</option>
                                    <option value="Jasa">Jasa</option>
                                    <option value="Wisata">Wisata</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select style="width: 250px" id="jenisproduk" name="jenisproduk" class="btn">
                                    <option value="default">Pilih Jenis Produk</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Kreasi Desa">Kreasi Desa</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="umkm-produk" id="umkm-produk">
                        
                        <div class="input-nama-produk mt-4">
                            <div class="input-group">
                                <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Nama Produk</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="text" class="form-control" placeholder="Isi nama produk" id="inputnamaproduk" name="inputnamaproduk">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="input-harga-produk mt-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Rp.</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="number" class="form-control" id="inputhargaproduk" name="inputhargaproduk" placeholder="Isi harga produk">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-kontak-penjual mt-3">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Nomor Kontak</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="number" class="form-control" placeholder="Isi nomor kontak penjual" id="inputkontakpenjual" name="inputkontakpenjual">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="input-detail-produk" style="margin-top: 35px">
                        <input id="x" value="Tuliskan Deskripsi Produk" type="hidden" name="inputdeskripsiproduk">
                        <trix-editor class="synap-trix-content" input="x"></trix-editor>
                    </div>
        
        
                    <div class="input-gambarproduk mt-3">
                        <div class="input-group mb-3" style="width: 715px">
                            <input type="file" class="form-control" id="inputgambarproduk" name="inputgambarproduk">
                            <label class="input-group-text" for="inputgambarproduk" style="border: 1px solid rgb(43, 43, 43);">
                                <b>Klik untuk upload gambar produk</b>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="umkm-jasa" id="umkm-jasa" style="display: none;">

                    <div class="input-nama-jasa mt-4">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Nama Jasa</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="text" class="form-control" placeholder="Isi nama jasa" id="inputnamajasa" name="inputnamajasa">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-deskripsi-jasa mt-3">
                        <div class="input-group" style="width: 50%">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Deskripsi Jasa</b></span>
                            <textarea class="form-control" aria-label="With textarea" id="inputdeskripsijasa" name="inputdeskripsijasa"></textarea>
                        </div>
                    </div>

                    <div class="input-kontak-penyedia mt-3">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Nomor Kontak</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="number" class="form-control" placeholder="Isi nomor kontak penyedia jasa" id="inputkontakpenyedia" name="inputkontakpenyedia">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-gambar-jasa mt-3">
                        <div class="input-group mb-3" style="width: 715px">
                            <input type="file" class="form-control" id="inputgambarjasa" name="inputgambarjasa">
                            <label class="input-group-text" for="inputgambarjasa" style="border: 1px solid rgb(43, 43, 43);">
                                <b>Klik untuk upload gambar jasa</b>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="umkm-wisata" id="umkm-wisata" style="display: none;">

                    <div class="input-nama-wisata mt-4">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Nama Wisata</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="text" class="form-control" placeholder="Isi nama wisata" id="inputnamawisata" name="inputnamawisata">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-deskripsi-wisata mt-3">
                        <div class="input-group" style="width: 50%">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Deskripsi Wisata</b></span>
                            <textarea class="form-control" aria-label="With textarea" id="inputdeskripsiwisata" name="inputdeskripsiwisata"></textarea>
                        </div>
                    </div>

                    <div class="input-tarif mt-3">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Tarif Wisata</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="number" class="form-control" placeholder="Isi tarif wisata" id="inputtarif" name="inputtarif">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-lokasi mt-3">
                        <div class="input-group">
                            <span class="input-group-text" style="border: 1px solid rgb(43, 43, 43);"><b>Titik lokasi</b></span>
                            <div class="form-floating">
                                <div class="col-pd-3">
                                    <input type="number" class="form-control" placeholder="Isi titik lokasi map wisata" id="inputlokasi" name="inputlokasi">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-gambar-wisata mt-3">
                        <div class="input-group mb-3" style="width: 755px">
                            <input type="file" class="form-control" id="inputgambarwisata" name="inputgambarwisata">
                            <label class="input-group-text" for="inputgambarwisata" style="border: 1px solid rgb(43, 43, 43);">
                                <b>Klik untuk upload gambar wisata</b>
                            </label>
                        </div>
                    </div>

                    
                </div>
                <div class="button-wisata mt-4">
                    <button class="btn b-tambahwisata" type="submit" id="btn-tambah-wisata" style="width: 120px">
                        <b>Submit</b>
                    </button>
                </div>
            </form>
            

        </div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>

        function jenisUmkm(){
            var test = document.getElementById("jenisumkm").value;

            switch (test) {
                case "Produk":
                    document.getElementById("jenisproduk").style.display = 'block';
                    document.getElementById("umkm-produk").style.display = 'block';
                    document.getElementById("umkm-jasa").style.display = 'none';
                    document.getElementById("umkm-wisata").style.display = 'none';
                    break;
                    
                case "Jasa":
                    document.getElementById("jenisproduk").style.display = 'none';
                    document.getElementById("umkm-produk").style.display = 'none';
                    document.getElementById("umkm-jasa").style.display = 'block';
                    document.getElementById("umkm-wisata").style.display = 'none';
                    break;

                case "Wisata":
                    document.getElementById("jenisproduk").style.display = 'none';
                    document.getElementById("umkm-produk").style.display = 'none';
                    document.getElementById("umkm-jasa").style.display = 'none';
                    document.getElementById("umkm-wisata").style.display = 'block';
                    break;
            
                default:
                    break;
            }

        }

    </script>


  </body>
</html>