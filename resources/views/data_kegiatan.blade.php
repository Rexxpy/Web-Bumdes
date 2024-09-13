<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  

    <title>Data Kegiatan | BUMDES Tawar</title>
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

    .option4 {
        border-left: 5px solid #550c0c;
        background-color: var(--Border-color);
        color: white;
        cursor: pointer;
    }

    .option4:hover {
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

    .tgl-kegiatan {
        width: 60%;
        height: 30%;
        background-color: #F8F8F8;
        border-radius: 15px;
        box-shadow: 0px 4px 48.4px -10px #00000040;
    }

    #str,#end{
        left: 500px;
        top: 53px;
        border:1px solid rgba(19, 61, 139, 0);
        background-color: #06539c00;
        color: rgba(0, 0, 0, 0.705);
        font-weight: bold;
        font-size: 20px;
        width: 140px;
    }

    #startd,#endd{
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        color: rgb(43, 43, 43);
        border-radius: 5px;
        background: #eeeeee;
    }

    .button-tampil .btn{
        font-size: 20px;
        color: white;
        width: 155px;
    }

    .b-tampil{
        background-color: #267E18;
    }
    .b-tampil:hover{
        border-color: #267E18;
        border-width: 2px;
        color: rgb(43, 43, 43);
    }

    .data-kegiatan .btn {
        font-size: 20px;
        color: white;
        width: 215px;
    }

    .b-tambah{
        background-color: #990E0E;
    }
    .b-tambah:hover{
        border-color: #990E0E;
        border-width: 2px;
        color: rgb(43, 43, 43);
    }

    th{
        text-align: center;
        vertical-align: middle;
    }

    #tabelkegiatan thead th{
        background-color: #270a0a;
        color: white;
    }

    .b-edit{
        background-color: #ff790c;
        color: white;
    }

    .b-edit:hover{
        border-color: #270a0a;
    }

    .b-delete{
        background-color: #be1414;
        color: white;
    }

    .b-delete:hover{
        border-color: #270a0a;
    }
</style>

<body style="background-color: #eee5e5">
    
    @include('partial.navbarAdmin')

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
						<i style="color: #A01515;" class="bi bi-file-earmark-check fs-3"></i>
						<a href="/dataumkm">
							<h6>Data UMKM</h6>
						</a>
					</div>

					<div class="nav-option option4">
						<i class="bi bi-clipboard-check fs-3"></i>
						<a href="/datakegiatan">
							<h6 style="color: white">Data Kegiatan</h6>
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
			
            <div class="tgl-kegiatan">
                <div class="form-tgl mx-4" style="position: relative;top:5%;">
                    <div class="textfield-tgl">
                        <div style="display: inline-block;"><p style="font-size: 27px;font-weight:600;color:rgb(43, 43, 43);">Periode Tanggal :</p></div>
                        <div style="display: inline-block;"><input type="text" name="str" id="str"  value="" class="form-control" readonly></div>
                        <div style="display: inline-block;"><p id="textsd" style="font-size: 27px;font-weight:600;color:rgb(43, 43, 43);">s/d </p></div>
                        <div style="display: inline-block;"><input type="text" name="end" id="end"  value="" class="form-control" readonly></div>
                    </div>
    
                    <div class="input-tgl mt-3">
                        <div style="display: inline-block;">
                            <input type="date" name="startd" id="startd">
                            &nbsp;
                            <b>-</b>
                            &nbsp;
                            <input type="date" name="endd" id="endd"> 
                            &nbsp;
                        </div>        
                    </div>
                </div>    
			</div>

            <div class="button-tampil mt-3">
                <button class="btn b-tampil"><b>Tampil Data</b></button>
            </div>

            <div class="data-kegiatan" style="margin-top: 70px;">
                <button class="btn b-tambah" id="btn-tambah">
                    <i class="bi bi-plus-circle h4" style="vertical-align: middle;"></i>
                    <b>&nbsp;&nbsp;Tambah Data</b>
                </button>
            </div>

            <div class="table-responsive mt-4">
                <table id="tabelkegiatan" class="table table-bordered" style="width:60%;height:10px">
                    <thead>
                        <tr>
							<th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
						@foreach ($datas as $data)     
                        <form action="{{route('show_edit_kegiatan',[$data->id])}}" method="post">
                            @csrf        
							<tr style="border:1px solid #0a0a27;">
								<td><center>{{ $no++ }}</center></td>
								<td><center>{{ $data->nama_kegiatan }}</center></td>
								<td><center>{{ $data->tanggal }}</center></td>
								<td style="width: 31%">
                                    <button class="btn b-edit" value="kegiatan" name="b-edit"><span class="bi bi-pencil-square"><b> Edit</b></span></button>		
                        </form>
                                <form action="{{route('delete_kegiatan',[$data->id])}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn b-delete"><span class="bi bi-trash-fill"><b> Delete</b></span></button>
                                </form>
                                </td>			
							</tr>
						@endforeach
                    </tbody>
            	</table>
            </div>

		</div>
	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <script type="text/javascript">
        document.getElementById("btn-tambah").onclick = function () {
            location.href = "/tambah_data_kegiatan";
        };
    </script>
    <script>
        $(window).load(function() {
          // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");;
        });
    </script>

  </body>
</html>