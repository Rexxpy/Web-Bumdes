<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JasaController extends Controller
{
    public function index(){
        $datajasa = DB::table('jasa')->get();
        $navData = "UMKM Jasa";
        return view('jasa')->with('datajasa',$datajasa)->with('navData',$navData);
    }
}
