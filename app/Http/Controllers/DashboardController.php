<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){
        $jumlahproduk = DB::table('produk')->count();
        $jumlahjasa = DB::table('jasa')->count();
        $jumlahwisata = DB::table('wisata')->count();

        $datakegiatan = DB::table('kegiatan')
                                ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                                ->orderBy('kegiatan.created_at', 'DESC')
                                ->limit(3)
                                ->get();

        return view('dashboard')
                    ->with('jumlahproduk', $jumlahproduk)
                    ->with('jumlahjasa', $jumlahjasa)
                    ->with('jumlahwisata', $jumlahwisata)
                    ->with('datakegiatan', $datakegiatan);

        // dd($datakegiatan);
    }
}
