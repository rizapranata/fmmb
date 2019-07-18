<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class HomeController extends Controller
{
    public function home()
    {
        $show = User::all();

        return view('/home',['show' => $show]);
    }
}
