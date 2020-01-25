<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function route(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user_name = $request->session()->get('user_name');
        if ($user_id > 0) {
            return view('home', ['username' => $user_name]);
        } else return view('home');
    }
}
