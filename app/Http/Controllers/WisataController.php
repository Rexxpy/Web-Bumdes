<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WisataController extends Controller
{
    public function index(){
        $datawisata = DB::table('wisata')
                            ->join('gambar_wisata', 'wisata.id', '=', 'gambar_wisata.id_wisata')
                            ->get();
        $navData = "UMKM Wisata";
        return view('wisata')->with('datawisata',$datawisata)->with('navData',$navData);
    }

    public function show_deskripsi($id){
        $datawisata = DB::table('wisata')
        ->join('gambar_wisata', 'wisata.id', '=', 'gambar_wisata.id_wisata')
        ->where('wisata.id',$id)
        ->get();

        $navData = "UMKM Wisata";
        $navData2 = "Deskripsi Wisata";
        return view('deskripsi_wisata', [
            'datawisata' => $datawisata,
            'navData' => $navData,
            'navData2' => $navData2
        ]);
    }
}
