<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    function route(Request $request)
    {

        if (!$request->session()->has('user_id')) {
            return view('home');
        }
        $results = DB::table('portfolio')->get();
        return view('portfolio', ['portfolios' => $results]);
    }

    function all()
    {
        $results = DB::table('portfolio')->get();
        return view('portfolio', ['portfolios' => $results]);
    }

    function website()
    {
        $results = DB::table('portfolio')->where('type', '=', 'W')->get();
        return view('portfolio', ['portfolios' => $results]);
    }

    function apps()
    {
        $results = DB::table('portfolio')->where('type', '=', 'A')->get();
        return view('portfolio', ['portfolios' => $results]);
    }

    function design()
    {
        $results = DB::table('portfolio')->where('type', '=', 'D')->get();
        return view('portfolio', ['portfolios' => $results]);
    }

    function photography()
    {
        $results = DB::table('portfolio')->where('type', '=', 'P')->get();
        return view('portfolio', ['portfolios' => $results]);
    }
}
