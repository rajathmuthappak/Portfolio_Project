<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as RE;
use Illuminate\Support\Facades\DB;

class UpdateData extends Controller
{


    function updateContactInfo(Request $request)
    {
        DB::table('user_info')
            ->update([
                'address_line1' => $request->input('address_line1'),
                'address_line2' => $request->input('address_line2'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                'personal_number' => $request->input('personal_number'),
                'whatsapp_number' => $request->input('whatsapp_number'),
                'skype' => $request->input('skype'),
                'email_id' => $request->input('email_id'),
                'website' => $request->input('website'),
                'zip' => $request->input('zip'),
                'dob' => $request->input('dob'),
                'nationality' => $request->input('nationality')
            ]);
        return view('updateSuccess');
    }

    function updateHireMe(Request $request)
    {
        $requestURI = str_replace(["&edit_references=Update+info", "+", "%3D"], " ", RE::server('REQUEST_URI'));
        $requestURI = str_replace("%0D%0A", "\n", $requestURI);
        $job_array = explode('&', $requestURI);
        $id = $rate = $desc = $active = "";
        foreach ($job_array as $job) {
            if (stripos($job, "job_id") !== false) {
                $id = substr($job, stripos($job, "=") + 1);
            } else if (stripos($job, "job_description") !== false) {
                $desc = substr($job, stripos($job, "=") + 1);
            } else if (stripos($job, "job_rate") !== false) {
                $rate = substr($job, stripos($job, "=") + 1);
            } else if (stripos($job, "Active") !== false) {
                $active = substr($job, stripos($job, "=") + 1);
            }
            if ($active !== "") {
                DB::table('hire_me')
                    ->where('job_id', $id)
                    ->update([
                        'job_rate' => $rate,
                        'job_description' => $desc,
                        'Active' => $active
                    ]);
                $active = "";
            }
        }
        return view('updateSuccess');
    }

    function updateReference()
    {
        $requestURI = str_replace(["&edit_references=Update+info", "+", "%3D"], " ", RE::server('REQUEST_URI'));
        $requestURI = str_replace("%0D%0A", "\n", $requestURI);
        $reference_array = explode('&', $requestURI);
        $id = $referrer = $referrer_designation = $reference_given = $display = "";
        foreach ($reference_array as $reference) {
            if (stripos($reference, "reference_id") !== false) {
                $id = substr($reference, stripos($reference, "=") + 1);
            } else if (stripos($reference, "referrer") !== false) {
                $referrer = substr($reference, stripos($reference, "=") + 1);
            } else if (stripos($reference, "designation") !== false) {
                $referrer_designation = substr($reference, stripos($reference, "=") + 1);
            } else if (stripos($reference, "reference_given") !== false) {
                $reference_given = substr($reference, stripos($reference, "=") + 1);
            } else if (stripos($reference, "display") !== false) {
                $display = substr($reference, stripos($reference, "=") + 1);
            }

            if ($display !== "") {
                DB::table('references_given')
                    ->where('reference_id', $id)
                    ->update([
                        'referrer' => $referrer,
                        'referrer_designation' => $referrer_designation,
                        'reference' => $reference_given,
                        'display' => $display
                    ]);
                $display = "";
            }
        }
        return view('updateSuccess');
    }

    function updateResume()
    {
        $requestURI = str_replace(["&edit_resumes=Update+info", "+"], " ", RE::server('REQUEST_URI'));
        $requestURI = str_replace("%0D%0A", "\n", $requestURI);
        $requestURI = substr($requestURI, stripos($requestURI, "?") + 1);
        $resume_array = explode('&', $requestURI);
        $id = $year = $company = $designation = $responsibilities = $display = "";

        foreach ($resume_array as $resume) {
            if (stripos($resume, "resume_id") !== false) {
                $id = substr($resume, stripos($resume, "=") + 1);
            } else if (stripos($resume, "year") !== false) {
                $year = substr($resume, stripos($resume, "=") + 1);
            } else if (stripos($resume, "company") !== false) {
                $company = substr($resume, stripos($resume, "=") + 1);
            } else if (stripos($resume, "designation") !== false) {
                $designation = substr($resume, stripos($resume, "=") + 1);
            } else if (stripos($resume, "responsibilities") !== false) {
                $responsibilities = substr($resume, stripos($resume, "=") + 1);
            } else if (stripos($resume, "display") !== false) {
                $display = substr($resume, stripos($resume, "=") + 1);
            }

            if ($display !== "") {
                DB::table('resumes')
                    ->where('resume_id', $id)
                    ->update([
                        'year' => $year,
                        'company' => $company,
                        'designation' => $designation,
                        'responsibilities' => $responsibilities,
                        'display' => $display
                    ]);
                $display = "";
            }
        }
        return view('updateSuccess');
    }

    function updateSkill()
    {
        $requestURI = str_replace(["&edit_skills=Update+info", "+"], " ", RE::server('REQUEST_URI'));
        $requestURI = str_replace("%0D%0A", "\n", $requestURI);
        $requestURI = substr($requestURI, stripos($requestURI, "?") + 1);
        $skill_array = explode('&', $requestURI);
        $skill_id = $skill_name = $knowledge = $skill_type = $active = "";

        foreach ($skill_array as $skill) {
            if (stripos($skill, "skill_id") !== false) {
                $skill_id = substr($skill, stripos($skill, "=") + 1);
            } else if (stripos($skill, "skill_name") !== false) {
                $skill_name = substr($skill, stripos($skill, "=") + 1);
            } else if (stripos($skill, "knowledge") !== false) {
                $knowledge = substr($skill, stripos($skill, "=") + 1);
            } else if (stripos($skill, "skill_type") !== false) {
                $skill_type = substr($skill, stripos($skill, "=") + 1);
            } else if (stripos($skill, "active") !== false) {
                $active = substr($skill, stripos($skill, "=") + 1);
            }

            if ($active !== "") {
                DB::table('skills')
                    ->where('skill_id', $skill_id)
                    ->update([
                        'skill_name' => $skill_name,
                        'knowledge' => $knowledge,
                        'skill_type' => $skill_type,
                        'active' => $active
                    ]);
                $active = "";
            }
        }
        return view('updateSuccess');
    }

    function updateJobSeeker(Request $request)
    {
        DB::table('job_seeker')
            ->update([
                'designation' => $request->input('designation'),
                'professional_summary' => $request->input('professional_summary')
            ]);
        return view('updateSuccess');
    }
}
