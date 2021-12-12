<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function userLogin(Request $request)
    {
        //sessioning
        $data = $request->input('username');
        $request->session()->put('username', $data);
        // echo session('username');
        return view('pages.profile');
    }
}
