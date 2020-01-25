<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    public function getData(){
    $user_info_job_seeker = DB::table('user_info')
            ->join('job_seeker', 'user_info.user_id', '=', 'job_seeker.user_id')->get();
        $data = array(
            'name' => $user_info_job_seeker[0]->full_name,
            'address_line1' => $user_info_job_seeker[0]->address_line1,
            'address_line2' => $user_info_job_seeker[0]->address_line2,
            'city' => $user_info_job_seeker[0]->city,
            'state' => $user_info_job_seeker[0]->state,
            'country' => $user_info_job_seeker[0]->country,
            'nationality' => $user_info_job_seeker[0]->nationality,
            'dob' => $user_info_job_seeker[0]->dob,
            'phone' => $user_info_job_seeker[0]->personal_number,
            'whatsapp_number' => $user_info_job_seeker[0]->whatsapp_number,
            'skype' => $user_info_job_seeker[0]->skype,
            'email_id' => $user_info_job_seeker[0]->email_id,
            'website' => $user_info_job_seeker[0]->website,
            'zip' => $user_info_job_seeker[0]->zip,
            'designation' => $user_info_job_seeker[0]->designation,
            'description' => $user_info_job_seeker[0]->professional_summary,
        );

        return $data;
    }
}

