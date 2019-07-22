<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        Sentinel::registerAndActivate($request->all());

        $user = User::all();

        return view('/home', ['show' => $user]);
    }
}
