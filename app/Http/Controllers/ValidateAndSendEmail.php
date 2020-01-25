<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateAndSendEmail extends Controller
{
    function sendMail(Request $request)
    {
        return $request->input('name');
    }
}
