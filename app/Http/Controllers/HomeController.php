<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){

        $datakegiatan = DB::table('kegiatan')
                                ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                                ->orderBy('kegiatan.created_at', 'DESC')
                                ->limit(3)
                                ->get();

        $dataumkm = DB::table('produk')->orderBy('created_at', 'DESC') ->limit(1)->get();

        return view('home')->with('datakegiatan',$datakegiatan)->with('dataumkm',$dataumkm);
    }
}
