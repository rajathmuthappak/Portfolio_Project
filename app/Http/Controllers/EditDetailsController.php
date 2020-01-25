<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditDetailsController extends Controller
{
    function route(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return view('home');
        }

        $edit_contact_info = DB::table('user_info')->get();
        $edit_hire_me = DB::table('hire_me')->get();
        $edit_job_seeker = DB::table('job_seeker')->get();
        $edit_references = DB::table('references_given')->get();
        $edit_resumes = DB::table('resumes')->get();
        $edit_skills = DB::table('skills')->get();

        $data = array(
            'edit_contact_info' => $edit_contact_info,
            'edit_hire_me' => $edit_hire_me,
            'edit_job_seeker' => $edit_job_seeker,
            'edit_references' => $edit_references,
            'edit_resumes' => $edit_resumes,
            'edit_skills' => $edit_skills
        );
        //return $data;
        return view('editDetails', $data);
    }
}
