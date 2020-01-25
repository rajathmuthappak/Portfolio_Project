<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class skills extends Model
{
    public function getData(){
        $skills = DB::table('skills')->get();
        $marketableArray = collect($skills)->where('skill_type', 'M');
        $transferableArray = collect($skills)->where('skill_type', 'T');
        $languageArray = collect($skills)->where('skill_type', 'L');
        $data = array(
            'marketableArray' => $marketableArray,
            'transferableArray' => $transferableArray,
            'languageArray' => $languageArray
        );
        return $data;
    }
}
