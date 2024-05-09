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

        return view('wisata')->with('datawisata',$datawisata);
    }

    public function show_deskripsi($id){
        $datawisata = DB::table('wisata')
        ->join('gambar_wisata', 'wisata.id', '=', 'gambar_wisata.id_wisata')
        ->where('wisata.id',$id)
        ->get();

        return view('deskripsi_wisata')->with('datawisata',$datawisata);
    }
}
