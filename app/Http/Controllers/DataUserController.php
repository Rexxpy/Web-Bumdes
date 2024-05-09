<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DataUserController extends Controller
{
    
    public function index(){
        $datauser = DB::table('users')->get();

        return view('data_user')->with('datauser',$datauser);
    }

}
