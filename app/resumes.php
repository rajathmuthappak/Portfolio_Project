<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class resumes extends Model
{
    public function getData(){
        return DB::table('resumes')->where('display', '=', 'Y')->get();
    }
}
