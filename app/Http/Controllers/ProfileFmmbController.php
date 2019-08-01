<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileFmmbController extends Controller
{
    public function profile()
    {
        return view('profile.profileFmmb');
    }

    public function sejarah()
    {
        return view('profile.sejarah');
    }
}
