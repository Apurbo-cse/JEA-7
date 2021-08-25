<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninCotroller extends Controller
{
    public function signin()
    {
        return view('frontend.signin');
    }
}
