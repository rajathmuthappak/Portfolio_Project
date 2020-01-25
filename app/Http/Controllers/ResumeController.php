<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Resumes;

class ResumeController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }
        $resumes = new Resumes();
        return view('resumes', ['resumes'=>$resumes->getData()]);
    }
}
