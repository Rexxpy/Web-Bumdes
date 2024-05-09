<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JasaController extends Controller
{
    public function index(){
        $datajasa = DB::table('jasa')->get();

        return view('jasa')->with('datajasa',$datajasa);
    }
}
