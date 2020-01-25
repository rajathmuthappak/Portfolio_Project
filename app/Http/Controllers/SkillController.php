<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Skills;

class SkillController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }

        /* $skills = DB::table('skills')->get();
        $marketableArray = collect($skills)->where('skill_type', 'M');
        $transferableArray = collect($skills)->where('skill_type', 'T');
        $languageArray = collect($skills)->where('skill_type', 'L');
 */
       /*  $data = array(
            'marketableArray' => $marketableArray,
            'transferableArray' => $transferableArray,
            'languageArray' => $languageArray
        ); */

        $skills = new Skills();

        return view('skills', $skills->getData());
    }
}
