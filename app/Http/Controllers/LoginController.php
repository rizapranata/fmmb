<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
       $show = Sentinel::authenticate($request->all());
        //return Sentinel::check();
        return view('/home');
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect('/login');
    }
}
