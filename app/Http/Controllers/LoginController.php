<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $credentials = [
            'namapendek' => $request->input('namapendek'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            if (auth()->user()->status == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home')->with('success','Login Berhasil');
            }
        }
  
        return back()->with('loginError','Username atau password salah !');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/loginview');
    }

    public function showlupa(){
        return view('lupapassword');
    }

    public function gantipasswd(Request $request){
        $userData = User::where('namapendek',$request->namapendek)->first();
        $userData->update([
          'password'=>bcrypt($request->passwordbaru)
        ]);

        return redirect('/loginview');
    }
}
