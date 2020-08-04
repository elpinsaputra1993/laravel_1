<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registrasi()
    {
        return view('general.form');
    }

    public function welcome(Request $request)
    {
        $post = $request->input();
        return view('general.welcome', compact('post'));
    }
}
