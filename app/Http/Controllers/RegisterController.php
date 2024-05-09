<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(Request $request){

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = 'admin';
        
        $max = DB::table('users')->max('id') + 1; 
        DB::statement("ALTER TABLE users AUTO_INCREMENT =  $max");
        
        // dd($input);
        User::create($input);
        
        return redirect()
            ->route('loginview')
            ->with($request->only('namapendek', 'password'));
    }


}
