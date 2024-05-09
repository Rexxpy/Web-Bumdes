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

        return view('kegiatan')->with('datakegiatan',$datakegiatan);
    }

    public function show_deskripsi($id){
        $datakegiatan = DB::table('kegiatan')
                                ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                                ->where('kegiatan.id',$id)
                                ->get();
        return view('deskripsi_kegiatan')->with('datakegiatan',$datakegiatan);
    }
}
