<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function route(Request $request)
    {
        $view = $request->session()->has('user_id') ? 'blogs' : 'home';
        return view($view);
    }
}
