<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    public function index(){
        $dataproduk = DB::table('produk')->get();
        return view('produk', ['datas'=>$dataproduk]);
    }

    public function show_deskripsi($id){
        $dataproduk = DB::table('produk')->where('id',$id)->get();
        return view('deskripsi_produk',['dataproduk'=>$dataproduk]);

        // dd($id);
    }

    public function filter(Request $request){
        $filter = $request->input('b-produk');

        $tampil = DB::table('produk')->where('jenis_produk',$filter)->get();

        return view('produk')->with('datas', $tampil);

        // dd($request->input('b-produk'));
    }

}
