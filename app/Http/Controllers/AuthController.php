<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use DB;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = DB::table('user')->where('username', $request->username)->where('password', $request->password)->first();

        if ($data){
            if ($data->role=="administrator"){
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/dashboard');
            }
            elseif ($data->role=="peserta") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/test');
            }
        }
        return redirect('/')->with('error', 'Username atau Password Anda Salah');
    }

    public function logout(){
        Session::flush();

        return redirect('/');
    }
}
