<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HireMe;

class HireMeController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }

        $hireme = new HireMe();
        return view('hireMe', $hireme->getData());
    }
}
