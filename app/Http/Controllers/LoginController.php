<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class LoginController extends Controller
{
   
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        Sentinel::authenticate($request->all());
        //return Sentinel::check();
        $show = User::all();
        return view('home',['show' => $show]);
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect('/login');
    }
}
