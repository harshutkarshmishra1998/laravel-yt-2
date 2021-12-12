<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    // function index()
    // {
    //     // return Http::get('reqres.in/api/users?page=1');
    //     //call data from another api

    //     $data = Http::get('reqres.in/api/users?page=1');
    //     $data = $data['data'];
    //     return view('pages.data', compact('data'));
    // }

    function testRequest(Request $request)
    {
        return $request->input();
    }
}
