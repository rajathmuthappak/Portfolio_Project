<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class references_given extends Model
{
    public function getData(){
        $referrences = DB::table('references_given')->where('display', '=', 'Y')->get();
        return $referrences;
    }
}
