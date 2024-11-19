<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/dashboard_umkm.css">

    <title>Data UMKM | BUMDES Tawar</title>
</head>

<body style="background-color: #eee5e5">
    
    @include('partial.navbarAdmin')
    
	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">

                    <div class = "item-nav">
                        <a href="/dashboard">
                            <div class="nav-option option1">
                                <i style="color: #A01515;" class="bi bi-house fs-3"></i>
                                <h6>Dashboard</h6>
                            </div>
                        </a>
                    </div>

                    <div class = "item-nav">
                        <a href="/datauser">
                            <div class="nav-option option2">
                                <i  style="color: #A01515;" class="bi bi-person-rolodex fs-3"></i>
                                <h6>Data User</h6>
                            </div>
                        </a>
                    </div>
                        
                    <div class = "item-nav">
                        <a href="/dataumkm">
                            <div class="nav-option option3">
                                <i class="bi bi-file-earmark-check fs-3"></i>
                                <h6 style="color: white">Data UMKM</h6>
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
            <div class="tgl-umkm">
                
                <form action="/filter_data_umkm" method="post">
                @csrf
                <div class="form-tgl mx-4" >
                    <div class="textfield-tgl">
                        <div style="display: inline-block;"><p style="font-size: 27px;font-weight:600;color:rgb(43, 43, 43);">Periode Tanggal :</p></div>
                        <div style="display: inline-block;"><input type="text" name="str" id="str"  value="{{ $start }}" class="form-control" readonly></div>
                        <div style="display: inline-block;"><p id="textsd" style="font-size: 27px;font-weight:600;color:rgb(43, 43, 43);">s/d </p></div>
                        <div style="display: inline-block;"><input type="text" name="end" id="end"  value="{{ $end }}" class="form-control" readonly></div>
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

            <div class="tampil-umkm">
                <div class="form-button mx-4">
    
                    <p style="font-size: 27px;font-weight:600;color:rgb(43, 43, 43);">Tampilkan data UMKM</p>
                  
                    <div class="button-umkm mt-4">
                       <div class="row" >
                            <div class="col-md-4">
                                <button class="btn b-produk" value="produk" name="b-umkm"><b>Produk</b></button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn b-jasa"  value="jasa" name="b-umkm"><b>Jasa</b></button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn b-wisata"  value="wisata" name="b-umkm"><b>Wisata</b></button>
                            </div>
                       </div>     
                    </div>
                </div>    
			</div>
        </form>
    
        
            <div class="data-umkm mt-5">
                <button class="btn b-tambah" id="btn-tambah">
                    <i class="bi bi-plus-circle h4" style="vertical-align: middle;"></i>
                    <b>&nbsp;&nbsp;Tambah Data</b>
                </button>
            </div>

           
                <div class="table-responsive mt-3">
                    
                    @if ( $filter == 'jasa')
                    <table id="tabeljasa" class="table table-bordered" style="width:70%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jasa</th>
                                <th>Kontak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach ($datas as $data)  
                            <form action="{{route('show_edit',[$data->id])}}" method="post">
                                @csrf
                                <tr style="border:1px solid #0a0a27;">
                                    <td><center>{{ $no++ }}</center></td>
                                    <td><center>{{ $data->nama_jasa }}</center></td>
                                    <td><center>{{ $data->kontak_penyedia_jasa }}</center></td>
                                    <td style="width: 26.5%">
                                        <button class="btn b-edit" value="jasa" name="b-edit"><span class="bi bi-pencil-square"><b> Edit</b></span></button>		
                            </form>
                                    <form action="{{route('delete_umkm',[$data->id])}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn b-delete" value="jasa" name="b-delete"><span class="bi bi-trash-fill"><b> Delete</b></span></button>
                                    </form>
                                    </td>	                           
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @elseif ( $filter == 'wisata')
                    <table id="tabelwisata" class="table table-bordered" style="width:70%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wisata</th>
                                <th>Tarif Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach ($datas as $data)      
                            <form action="{{route('show_edit',[$data->id])}}" method="post">
                             @csrf
                                <tr style="border:1px solid #0a0a27;">
                                    <td><center>{{ $no++ }}</center></td>
                                    <td><center>{{ $data->nama_wisata }}</center></td>
                                    <td><center>{{ $data->tarif }}</center></td>
                                    <td style="width: 18.5%">
                                        <button class="btn b-edit" value="wisata" name="b-edit"><span class="bi bi-pencil-square"><b> Edit</b></span></button>	
                            </form>	
                                    <form action="{{route('delete_umkm',[$data->id])}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn b-delete" value="wisata" name="b-delete"><span class="bi bi-trash-fill"><b> Delete</b></span></button>
                                    </form>
                                    </td>	                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <table id="tabelproduk" class="table mx-auto table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($datas as $data)             
                        <form action="{{route('show_edit',[$data->id])}}" method="post">
                        @csrf
                            <tr style="border:1px solid #0a0a27;">
                                <td><center>{{ $no++ }}</center></td>
                                <td><center>{{ $data->jenis_produk }}</center></td>
                                <td><center>{{ $data->nama_produk }}</center></td>
                                <td><center>{{ $data->harga }}</center></td>
                                <td><center>{{ $data->kontak_penjual }}</center></td>
                                <td style="width: 18.5%">
                                    <button class="btn b-edit" value="produk" name="b-edit"><span class="bi bi-pencil-square"><b> Edit</b></span></button>		
                        </form>
                                <form action="{{route('delete_umkm',[$data->id])}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn b-delete" value="produk" name="b-delete"><span class="bi bi-trash-fill"><b> Delete</b></span></button>
                                </form>
                                </td>		
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                @endif
                </div>
         
        </div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
       
    <script type="text/javascript">
        document.getElementById("btn-tambah").onclick = function () {
            location.href = "/tambah_data_umkm";
        };
    </script>
    

  </body>
</html>