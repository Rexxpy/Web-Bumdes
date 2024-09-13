<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    public function index(){
        $dataproduk = DB::table('produk')->get();
        $navData = "UMKM Produk";
        return view('produk', ['datas'=>$dataproduk], ['navData' => $navData]);
    }

    public function show_deskripsi($id){
        $dataproduk = DB::table('produk')->where('id',$id)->get();
        $navData = "UMKM Produk";
        $navData2 = "Deskripsi Produk";
        return view('deskripsi_produk', [
            'dataproduk' => $dataproduk,
            'navData' => $navData,
            'navData2' => $navData2
        ]);

        // dd($id);
    }

    public function filter(Request $request){
        $filter = $request->input('b-produk');

        $tampil = DB::table('produk')->where('jenis_produk',$filter)->get();

        $navData = "UMKM Produk";
        return view('produk')->with('datas', $tampil)->with('navData', $navData);

        // dd($request->input('b-produk'));
    }

}
