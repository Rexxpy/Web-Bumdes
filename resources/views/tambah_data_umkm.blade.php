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
</head>

<style>
	@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    :root {
        --background-color1: #990E0E;
        --background-color2: #ffffff;
        --background-color3: #ededed;
        --background-color4: #cad7fda4;
        --primary-color: #4b49ac;
        --secondary-color: #0c007d;
        --Border-color: #A01515;
        --one-use-color: #3f0097;
        --two-use-color: #5500cb;
    }
    body {
        background-color: var(--background-color4);
        max-width: 100%;
        overflow-x: hidden;
    }

    header {
        height: 70px;
        width: 100vw;
        padding: 0 30px;
        background-color: var(--background-color1);
        position: fixed;
        z-index: 100;
        box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 27px;
        font-weight: 600;
        color: rgb(231, 231, 231);
    }

    .icn {
        height: 30px;
    }
    .menuicn {
        cursor: pointer;
    }

    .searchbar,.message,.logosec {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .searchbar2 {
        display: none;
    }

    .logosec {
        gap: 60px;
    }

    .searchbar input {
        width: 250px;
        height: 42px;
        border-radius: 50px 0 0 50px;
        background-color: var(--background-color3);
        padding: 0 20px;
        font-size: 15px;
        outline: none;
        border: none;
    }


    .message {
        gap: 40px;
        position: relative;
        cursor: pointer;
    }
    .circle {
        height: 7px;
        width: 7px;
        position: absolute;
        background-color: #fa7bb4;
        border-radius: 50%;
        left: 19px;
        top: 8px;
    }
    .dp {
        height: 40px;
        width: 40px;
        background-color: #626262;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .main-container {
        display: flex;
        width: 100vw;
        position: relative;
        top: 70px;
        z-index: 1;
    }
    .dpicn {
        height: 42px;
    }

    .main {
        height: calc(100vh - 70px);
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
        padding: 40px 30px 30px 30px;
    }

    .main::-webkit-scrollbar-thumb {
        background-image:linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
    }
    .main::-webkit-scrollbar {
        width: 5px;
    }
    .main::-webkit-scrollbar-track {
        background-color: #9e9e9eb2;
    }

    .nav {
        min-height: 91vh;
        width: 250px;
        background-color: var(--background-color2);
        position: absolute;
        top: 0px;
        left: 00;
        box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        padding: 30px 0 20px 10px;
    }
    .navcontainer {
        height: calc(100vh - 70px);
        width: 300px;
        position: relative;
        overflow-y: scroll;
        overflow-x: hidden;
        transition: all 0.5s ease-in-out;
    }

    .navcontainer::-webkit-scrollbar {
        display: none;
    }

    .navclose {
        width: 80px;
    }

    .nav-option {
        width: 250px;
        height: 60px;
        display: flex;
        align-items: center;
        padding: 0 30px 0 20px;
        gap: 20px;
        transition: all 0.1s ease-in-out;
    }

    .nav-option:hover {
        border-left: 5px solid #a2a2a2;
        background-color: #dadada;
        cursor: pointer;
    }

    .nav-img {
        height: 30px;
    }

    .nav-upper-options {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }

    .option2 {
        border-left: 5px solid #550c0c;
        background-color: var(--Border-color);
        color: white;
        cursor: pointer;
    }

    .option2:hover {
        border-left: 5px solid #011303af;
        background-color: var(--Border-color);
    }

    .box:hover {
        transform: scale(1.08);
    }

    .box:nth-child(1) {
        background-color: var(--one-use-color);
    }
    .box:nth-child(2) {
        background-color: var(--two-use-color);
    }
    .box:nth-child(3) {
        background-color: var(--one-use-color);
    }
    .box:nth-child(4) {
        background-color: var(--two-use-color);
    }

    .box img {
        height: 50px;
    }

    .box .text {
        color: white;
    }

    .topic {
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 1px;
    }

    .topic-heading {
        font-size: 30px;
        letter-spacing: 3px;
    }

    .report-container {
        min-height: 300px;
        max-width: 1200px;
        margin: 70px auto 0px auto;
        background-color: #ffffff;
        border-radius: 30px;
        box-shadow: 3px 3px 10px rgb(188, 188, 188);
        padding: 0px 20px 20px 20px;
    }
    .report-header {
        height: 80px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 20px 10px 20px;
        border-bottom: 2px solid rgba(0, 20, 151, 0.59);
    }

    .recent-Articles {
        font-size: 30px;
        font-weight: 600;
        color: #5500cb;
    }

    .view {
        height: 35px;
        width: 90px;
        border-radius: 8px;
        background-color: #5500cb;
        color: white;
        font-size: 15px;
        border: none;
        cursor: pointer;
    }

    .report-body {
        max-width: 1160px;
        overflow-x: auto;
        padding: 20px;
    }
    .report-topic-heading, .item1 {
        width: 1120px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .t-op {
        font-size: 18px;
        letter-spacing: 0px;
    }

    .items {
        width: 1120px;
        margin-top: 15px;
    }

    .item1 {
        margin-top: 20px;
    }
    .t-op-nextlvl {
        font-size: 14px;
        letter-spacing: 0px;
        font-weight: 600;
    }

    .label-tag {
        width: 100px;
        text-align: center;
        background-color: rgb(0, 177, 0);
        color: white;
        border-radius: 4px;
    }

    a{
        color: rgb(43, 43, 43);
        text-decoration: none;
    }

    h6{
        font-weight: bold;
        font-size: 17px;
    }

    #jenisumkm{
        background-color: white;
        border-color: black;
        font-weight: 700;
        color: rgb(43, 43, 43);
    }

    #jenisumkm:hover{
        background-color: rgb(240, 240, 240);        
        font-weight: 700;
        color: rgb(43, 43, 43);
    }
    
    #jenisproduk{
        background-color: white;
        border-color: black;
        font-weight: 700;
        color: rgb(43, 43, 43);
    }

    #jenisproduk:hover{
        background-color: rgb(240, 240, 240);
        font-weight: 700;
        color: rgb(43, 43, 43);
    }

    #inputnamaproduk{
        width: 290px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputhargaproduk{
        width: 377px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputkontakpenjual{
        width: 285px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputgambarproduk{
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    .b-tambahproduk{
        background-color: #990E0E;
        color: white;
    }
    .b-tambahproduk:hover{
        border-color: #990E0E;
        border-width: 2px;
        color: rgb(43, 43, 43);
    }

    #inputnamajasa{
        width: 317px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputdeskripsijasa{
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputkontakpenyedia{
        width: 290px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputgambarjasa{
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    .b-tambahjasa{
        background-color: #990E0E;
        color: white;
    }
    .b-tambahjasa:hover{
        border-color: #990E0E;
        border-width: 2px;
        color: rgb(43, 43, 43);
    }

    #inputnamawisata{
        width: 317px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputdeskripsiwisata{
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputtarif{
        width: 330px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputlokasi{
        width: 342px;
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    #inputgambarwisata{
        border-radius: 5px;
        border: 1px solid rgb(43, 43, 43);
    }

    .b-tambahwisata{
        background-color: #990E0E;
        color: white;
    }
    .b-tambahwisata:hover{
        border-color: #990E0E;
        border-width: 2px;
        color: rgb(43, 43, 43);
    }

    .synap-trix-content{
        background-color: white;
        width: 500px;
        border: 1px solid rgb(43, 43, 43);
    }

    trix-toolbar .trix-button-group button {
        background-color: white;
    }

    .trix-button-group.trix-button-group--file-tools {display:none;}
    .trix-button--icon-undo,.trix-button--icon-redo { display:none; }

</style>

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
						<i class="bi bi-file-earmark-check fs-3"></i>
						<a href="/dataumkm">
							<h6 style="color: white">Data UMKM</h6>
						</a>
					</div>

					<div class="nav-option option3">
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