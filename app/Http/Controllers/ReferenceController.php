<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\References_given;
class ReferenceController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }
        $referrences = new References_given();
        return view('references', array('referrences' => $referrences->getData()));
    }
}
