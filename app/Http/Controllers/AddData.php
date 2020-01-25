<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddData extends Controller
{
    function addSkill(Request $request)
    {
        $id = DB::table('skills')->insertGetId(
            [
                'skill_name' => $request->input('skillName'),
                'knowledge' => $request->input('knowledge'),
                'skill_type' => $request->input('jobType')
            ]
        );
        if ($id > 0) {
            return view('addSuccess');
        }
        return $id;
    }

    function addResume(Request $request)
    {
        $id = DB::table('resumes')->insertGetId(
            [
                'user_id' => 1000,
                'year' => $request->input('year'),
                'company' => $request->input('company'),
                'designation' => $request->input('designation'),
                'responsibilities' => $request->input('responsibilities')
            ]
        );
        if ($id > 0) {
            return view('addSuccess');
        }
        return $id;
    }

    function addReference(Request $request)
    {
        $targetFile = './Images/References/' . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
        $id = DB::table('references_given')->insertGetId(
            [
                'referrer' => $request->input('referrer'),
                'referrer_designation' => $request->input('designation'),
                'reference' => $request->input('reference'),
                'image_location' => $targetFile
            ]
        );
        if ($id > 0) {
            return view('addSuccess');
        }
        return $id;
    }

    function addHireMe(Request $request)
    {
        $id = DB::table('hire_me')->insertGetId(
            [
                'user_id' => 1000,
                'job_rate' => $request->input('jobRate'),
                'job_description' => $request->input('jobDesc'),
                'job_type' => $request->input('jobType')
            ]
        );
        if ($id > 0) {
            return view('addSuccess');
        }
        return $id;
    }
}
