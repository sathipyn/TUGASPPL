<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request)
    {
    $user = User::create([
        'name' => $request->nama,
        'username'=>$request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);
    return redirect('/register');
     }


    public function login()
    {
        return view ('login');
    }

    public function ceklogin (Request $request)
    {
        if (!Auth::attempt([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
     ]))
    {
          return redirect('/login');
    }
        else
    {
          return redirect('/home');
    }

    }

    public function logout()
     {   Auth::logout();
        return redirect('/login');
     }
}