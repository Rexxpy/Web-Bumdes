<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function index() {
        $datakegiatan = DB::table('kegiatan')
                                ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                                ->get();
        $navData = "Kegiatan";
        return view('kegiatan')->with('datakegiatan',$datakegiatan)->with('navData',$navData);
    }

    public function show_deskripsi($id){
        $datakegiatan = DB::table('kegiatan')
                                ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                                ->where('kegiatan.id',$id)
                                ->get();
        $navData = "UMKM Kegiatan";
        $navData2 = "Deskripsi Kegiatan";
        return view('deskripsi_kegiatan', [
            'datakegiatan' => $datakegiatan,
            'navData' => $navData,
            'navData2' => $navData2
        ]);

    }
}
